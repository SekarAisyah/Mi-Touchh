<?php namespace App\Http\Repository;

use Illuminate\Support\Facades\DB;
use App\Http\Helpers\BaseHelper;

use function Ramsey\Uuid\v1;

Class CoachingRepository
{
    public function getById($id)
    {
        $data = DB::table('pocket_moving_tbl_t_coaching')
            ->join('users', 'pocket_moving_tbl_t_coaching.nrp', '=', 'users.nrp')
            ->where('pocket_moving_tbl_t_coaching.pid', $id)
            ->first(['pocket_moving_tbl_t_coaching.*', 'users.name', 'users.jabatan', 'users.departemen', 'users.divisi', 'users.distrik']);
        
            $data->username = $data->name;
        return $data;
    }

    public function create($data)
    {
        $selectedValue = isset($data['plan_coaching_add']) ? $data['plan_coaching_add'] : '';

        $isPlancoaching = ($selectedValue === 'coaching1' || $selectedValue === '1'); 
        
        return DB::table('pocket_moving_tbl_t_coaching')->insert([
            'NRP' => $data['nrp-dropdown'],
            'NAMA' => $data['name-add'],
            'NAMA_COACHING' => $data['nama_coaching_add'],
            'IS_PLAN_COACHING' => $isPlancoaching,
            'KOMPETENSI_NAME' => $data['name-kompetensi'],
            'KOMPETENSI_CODE' => $data['kode-pengembangan'],
            'COACHING_DATE' => $data['waktu_awal_coaching'],
            'TARGET_DESCRIPTION' => $data['deskripsi_coaching'],
            'OBJECTIVE_DESCRIPTION' => $data['target_coaching'],
            'COMPETENCY_DESCRIPTION' => $data['hasil_coaching'],
            'CREATE_AT' => now(),
            'STATUS' => '1', 
        
        ]);
    }
    public function getAllWithDate()
    {
        return DB::table('pocket_moving_tbl_t_coaching')
            ->join('users', 'pocket_moving_tbl_t_coaching.nrp', '=', 'users.nrp')
            ->select(
                'pocket_moving_tbl_t_coaching.*',
                'users.name as username',
                'users.departemen as departemen',
                'users.divisi as divisi',
                'users.distrik as distrik'
            )
            ->orderBy('pocket_moving_tbl_t_coaching.COACHING_DATE', 'desc'); 
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
        return DB::table('pocket_moving_tbl_t_coaching')
            ->where('PID', $id)
            ->update([
                'NRP' => $data['nrp-dropdown'],
                'NAMA' => $data['name-add'],
                'NAMA_COACHING' => $data['nama_coaching_add'],
                'KOMPETENSI_NAME' => $data['name-kompetensi'],
                'KOMPETENSI_CODE' => $data['kode-pengembangan'],
                'COACHING_DATE' => $data['waktu_awal_coaching'],
                'TARGET_DESCRIPTION' => $data['deskripsi_coaching'],
                'OBJECTIVE_DESCRIPTION' => $data['target_coaching'],
                'COMPETENCY_DESCRIPTION' => $data['hasil_coaching'],
                'STATUS' => $kodeStatus,
            ]);
    }
    public function getAll()
    {
        return DB::table('pocket_moving_tbl_t_coaching')
            ->orderBy('CREATE_AT', 'desc') 
            ->get();
    }


    public function getAllWithUsername()
    {
    $data = DB::table('pocket_moving_tbl_t_coaching')
        ->join('users', 'pocket_moving_tbl_t_coaching.nrp', '=', 'users.nrp')
        ->select('pocket_moving_tbl_t_coaching.*', 'users.name as username','users.departemen as departemen', 'users.divisi as divisi', 'users.distrik as distrik') 
        ->get();

    return $data;
    }

    public function send($userId, $userRole, $keterangan, $selectedcoachingId)
    {
        $coaching = DB::table('pocket_moving_tbl_t_coaching')->where('PID', $selectedcoachingId)->first();

        if (!$coaching) {
            return "coaching not found";
        }

        $currentKodeStatus = $coaching->status;
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

        DB::table('pocket_moving_tbl_t_coaching')
            ->where('PID', $selectedcoachingId)
            ->update($updateData);

        return "Status updated successfully";
    }

    public function revisi($revisiName, $selectedcoachingId, $userRole, $pesanRevisi, $userId)
    {
        $kodeStatus = 9; 

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

        DB::table('pocket_moving_tbl_t_coaching')
            ->where('PID', $selectedcoachingId)
            ->update([
                'REVISI_BY' => $userId,
                'REVISI_NAME' => $revisiName,
                'status' => $kodeStatus,
                'revisi_desc' => $pesanRevisi
            ]);

        return 'Data Coaching berhasil di "Revisi"';
    }

    public function reject($rejectName, $selectedcoachingId, $pesanReject, $userId)
    {
    
        DB::table('pocket_moving_tbl_t_coaching')
            ->where('PID', $selectedcoachingId)
            ->update([
                'REJECT_BY' => $userId,
                'REJECT_NAME' => $rejectName,
                'status' => 8,
                'REJECT_DESC' => $pesanReject
            ]);

        return 'Data Coaching Berhasil di "Reject"';
    }

    public function delete($selectedcoachingId)
    {
        try {
            DB::table('pocket_moving_tbl_t_coaching')->where('PID', $selectedcoachingId)->delete();
            return 'Data coaching Berhasil dihapus.';
        } catch (\Exception $e) {
            return 'Gagal menghapus data Coaching: ' . $e->getMessage();
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
}
?>