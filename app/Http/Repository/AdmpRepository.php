<?php namespace App\Http\Repository;

use Illuminate\Support\Facades\DB;
use App\Http\Helpers\BaseHelper;

use function Ramsey\Uuid\v1;

Class admpRepository
{
    public function getById($id)
    {
        $data = DB::table('pocket_moving_tbl_t_admp')
            ->join('users', 'pocket_moving_tbl_t_admp.nrp', '=', 'users.nrp')
            ->where('pocket_moving_tbl_t_admp.pid', $id)
            ->first(['pocket_moving_tbl_t_admp.*', 'users.name', 'users.jabatan', 'users.departemen', 'users.divisi', 'users.distrik']);
        
            $data->username = $data->name;
        return $data;
    }

    public function create($data)
    {
        $selectedValue = isset($data['plan_admp_add']) ? $data['plan_admp_add'] : '';

    
        // Konversi nilai 'plan_admp_add' menjadi boolean
        $isPlanAdmp = ($selectedValue === 'admp1' || $selectedValue === '1'); 
        
        return DB::table('pocket_moving_tbl_t_admp')->insert([
            'NRP' => $data['nrp-dropdown'],
            'NAMA' => $data['name-add'],
            'NAMA_ADMP' => $data['nama_admp_add'],
            'IS_PLAN_ADMP' => $isPlanAdmp,
            'KOMPETENSI' => $data['name-kompetensi'],
            'KODE' => $data['kode-pengembangan'],
            'ADMP_JA_START_DATE' => $data['waktu_awal_admp'],
            'ADMP_JA_FINISH_DATE' => $data['waktu_akhir_admp'],
            'JA_RESULT_DESCRIPTION' => $data['deskripsi_admp'],
            'JA_TARGET_DESCRIPTION' => $data['target_admp'],
            'JA_SHORT_DESCRIPTION' => $data['hasil_admp'],
            'CREATE_AT' => now(),
            'STATUS' => '1', 
        
        ]);
    }
    public function getAllWithDate()
    {
        return DB::table('pocket_moving_tbl_t_admp')
            ->join('users', 'pocket_moving_tbl_t_admp.nrp', '=', 'users.nrp')
            ->select(
                'pocket_moving_tbl_t_admp.*',
                'users.name as username',
                'users.departemen as departemen',
                'users.divisi as divisi',
                'users.distrik as distrik'
            )
            ->orderBy('pocket_moving_tbl_t_admp.ADMP_JA_START_DATE', 'desc'); 
    }

    public function edit($data, $id, $userRole)
    {
        $kodeStatus = 1; 
        switch ($userRole) {
            case 1:
                $kodeStatus = 1;
                break;
            case 2:
                $kodeStatus = 3;
                break;
            case 3:
                $kodeStatus = 4;
                break;
            case 4:
                $kodeStatus = 5;
                break;
            case 5:
                $kodeStatus = 6;
                break;
            default:
                $kodeStatus = 1;
                break;
        }
        return DB::table('pocket_moving_tbl_t_admp')
            ->where('PID', $id)
            ->update([
                'NRP' => $data['nrp-dropdown'],
                'NAMA' => $data['name-add'],
                'NAMA_ADMP' => $data['nama_admp_add'],
                'KOMPETENSI' => $data['name-kompetensi'],
                'KODE' => $data['kode-pengembangan'],
                'ADMP_JA_START_DATE' => $data['waktu_awal_admp'],
                'ADMP_JA_FINISH_DATE' => $data['waktu_akhir_admp'],
                'JA_RESULT_DESCRIPTION' => $data['deskripsi_admp'],
                'JA_TARGET_DESCRIPTION' => $data['target_admp'],
                'JA_SHORT_DESCRIPTION' => $data['hasil_admp'],
                'STATUS' => $kodeStatus,
            ]);
    }

    public function getAll()
    {
        return DB::table('pocket_moving_tbl_t_admp')
            ->orderBy('CREATE_AT', 'desc') 
            ->get();
    }


    public function getAllWithUsername()
    {
    $data = DB::table('pocket_moving_tbl_t_admp')
        ->join('users', 'pocket_moving_tbl_t_admp.nrp', '=', 'users.nrp')
        ->select('pocket_moving_tbl_t_admp.*', 'users.name as username','users.departemen as departemen', 'users.divisi as divisi', 'users.distrik as distrik') 
        ->get();

    return $data;
    }

    public function send($userId, $userRole, $keterangan, $selectedadmpId)
    {
        $admp = DB::table('pocket_moving_tbl_t_admp')->where('PID', $selectedadmpId)->first();

        if (!$admp) {
            return "admp not found";
        }

        $currentKodeStatus = $admp->status;
        $newKodeStatus = $currentKodeStatus + 1;

        $updateData = [
            'status' => $newKodeStatus,
        ];

        if ($userRole == 2) {
            $updateData['UPDATE_AT_ATASAN'] = now();
            $updateData['APPRV_ATASAN'] = "1";
            $updateData['keterangan'] = $keterangan;
        }elseif ($userRole == 3) {
            $updateData['UPDATE_AT_HR'] = now();
            $updateData['APPRV_HR'] = "1";
            $updateData['KETERANGAN_HR'] = $keterangan;
        }elseif ($userRole == 4) {
            $updateData['UPDATE_AT_HR_MNG'] = now();
            $updateData['APPRV_HR_MNG'] = "1";
            $updateData['KETERANGAN_HR_MNG'] = $keterangan;
        } elseif ($userRole == 5) {
            $updateData['UPDATE_AT_DRC'] = now();
            $updateData['APPRV_DRC'] = "1";
            $updateData['KETERANGAN_DRC'] = $keterangan;
        }

        DB::table('pocket_moving_tbl_t_admp')
            ->where('PID', $selectedadmpId)
            ->update($updateData);

        return "Status updated successfully";
    }

    public function revisi($revisiName, $selectedadmpId, $userRole, $pesanRevisi, $userId)
    {
        $kodeStatus = 9; // Default value

        switch ($userRole) {
            case 2:
                $kodeStatus = 9;
                break;
            case 3:
                $kodeStatus = 10;
                break;
            case 4:
                $kodeStatus = 11;
                break;
            case 5:
                $kodeStatus = 12;
                break;
            default:
                $kodeStatus = 9;
                break;
        }

        DB::table('pocket_moving_tbl_t_admp')
            ->where('PID', $selectedadmpId)
            ->update([
                'REVISI_BY' => $userId,
                'REVISI_NAME' => $revisiName,
                'status' => $kodeStatus,
                'revisi_desc' => $pesanRevisi
            ]);

        return 'Data admp berhasil di "Revisi"';
    }

    public function reject($rejectName, $selectedadmpId, $pesanReject, $userId)
    {
    
        DB::table('pocket_moving_tbl_t_admp')
            ->where('PID', $selectedadmpId)
            ->update([
                'REJECT_BY' => $userId,
                'REJECT_NAME' => $rejectName,
                'status' => 8,
                'REJECT_DESC' => $pesanReject
            ]);

        return 'Data admp Berhasil di "Reject"';
    }

    public function delete($selectedadmpId)
    {
        try {
            DB::table('pocket_moving_tbl_t_admp')->where('PID', $selectedadmpId)->delete();
            return 'Data admp Berhasil dihapus.';
        } catch (\Exception $e) {
            return 'Gagal menghapus data admp: ' . $e->getMessage();
        }
    }

    public function getKompetensi($kode) {
        return DB::table('pocket_moving_tbl_r_kompetensi')
            ->where('kode', $kode)
            ->first();
    }

    public function getAllKodeKompetensi()
    {
        return DB::table('pocket_moving_tbl_r_kompetensi')
            ->pluck('KODE', 'NAMA');
    }

    // public function getAllKodeKompetensi()
    // {
    // $data = DB::table('pocket_moving_tbl_t_admp')
    //     ->join('pocket_moving_tbl_r_kompetensi', 'pocket_moving_tbl_t_admp.kode', '=', 'pocket_moving_tbl_r_kompetensi.kode')
    //     ->select('pocket_moving_tbl_t_admp.*', 'pocket_moving_tbl_r_kompetensi.nama as kompetensiname')
    //     ->get();

    // return $data;
    // }
}

?>