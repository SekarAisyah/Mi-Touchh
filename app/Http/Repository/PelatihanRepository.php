<?php namespace App\Http\Repository;

use Illuminate\Support\Facades\DB;
use App\Http\Helpers\BaseHelper;
use Illuminate\Contracts\View\View;

use function Ramsey\Uuid\v1;

Class pelatihanRepository
{
    public function getById($id)
    {
        $data = DB::table('pocket_moving_tbl_t_pelatihan')
            ->join('users', 'pocket_moving_tbl_t_pelatihan.nrp', '=', 'users.nrp')
            ->where('pocket_moving_tbl_t_pelatihan.pid', $id)
            ->first(['pocket_moving_tbl_t_pelatihan.*', 'users.name', 'users.jabatan', 'users.departemen', 'users.divisi','users.distrik']);
        
            $data->username = $data->name;
        return $data;
    }

    public function create($data)
    {
        $isPlanpelatihan = ($data['plan_pelatihan_add'] === 'pelatihan1' || $data['plan_pelatihan_add'] === 'true');
        $isDonepelatihan = ($data['done_pelatihan_add'] === 'done1' || $data['done_pelatihan_add'] === 'true');
        $isJobsite = (strtolower($data['jobsite']) === 'ya');

        return DB::table('pocket_moving_tbl_t_pelatihan')->insert([
            'NRP' => $data['nrp-dropdown'],
            'NAMA' => $data['name-add'],
            // 'NAMA_pelatihan' => $data['nama_pelatihan_add'],
            'TRAINING_DONE' => $isPlanpelatihan,
            'IS_PLAN_ATMP' => $isDonepelatihan,
            'NARASUMBER' => $data['narasumber'],
            'NAMA_PENYELENGGARA' => $data['penyelenggara'], 
            'AREA' => $data['area'],
            'IS_JOBSITE' => $isJobsite,
            'CURRENCY' => $data['currency'],
            'BIAYA' => $data['biaya'],
            'MULAI_TRAINING' => $data['waktu_awal_pelatihan'],
            'SELESAI_TRAINING' => $data['waktu_akhir_pelatihan'],
            'BERANGKAT_TRAINING' => $data['waktu_berangkat'],
            'KEMBALI_TRAINING' => $data['waktu_pulang'],
            'MANFAAT_BAGI_PERUSAHAAN' => $data['manfaat_perusahaan'],
            'MANFAAT_BAGI_KARYAWAN' => $data['manfaat_karyawan'],
            'KOMPETENSI_DESC' => $data['name-kompetensi'],
            'KODE_KOMPETENSI' => $data['kode-pengembangan'],
            'CREATE_AT' => now(),
            'STATUS' => '1', 
        
        ]);
    }
    public function getAllWithDate()
    {
        return DB::table('pocket_moving_tbl_t_pelatihan')
            ->join('users', 'pocket_moving_tbl_t_pelatihan.nrp', '=', 'users.nrp')
            ->select(
                'pocket_moving_tbl_t_pelatihan.*',
                'users.name as username',
                'users.departemen as departemen',
                'users.divisi as divisi',
                'users.distrik as distrik',

            )
            ->orderBy('pocket_moving_tbl_t_pelatihan.MULAI_TRAINING', 'desc'); 
    }

    public function edit($data, $id, $userRole)
    {
        
        $isPlanpelatihan = ($data['plan_pelatihan_add'] === 'pelatihan1' || $data['plan_pelatihan_add'] === 'true');
        $isDonepelatihan = ($data['done_pelatihan_add'] === 'done1' || $data['done_pelatihan_add'] === 'true');
        $isJobsite = (strtolower($data['jobsite']) === 'ya');
       
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
        return DB::table('pocket_moving_tbl_t_pelatihan')
            ->where('PID', $id)
            ->update([
                'NRP' => $data['nrp-dropdown'],
                'NAMA' => $data['name-add'],
                // 'NAMA_pelatihan' => $data['nama_pelatihan_add'],
                'TRAINING_DONE' => $isPlanpelatihan,
                'IS_PLAN_ATMP' => $isDonepelatihan,
                'NARASUMBER' => $data['narasumber'],
                'NAMA_PENYELENGGARA' => $data['penyelenggara'], 
                'AREA' => $data['area'],
                'IS_JOBSITE' => $isJobsite,
                'CURRENCY' => $data['currency'],
                'BIAYA' => $data['biaya'],
                'MULAI_TRAINING' => $data['waktu_awal_pelatihan'],
                'SELESAI_TRAINING' => $data['waktu_akhir_pelatihan'],
                'BERANGKAT_TRAINING' => $data['waktu_berangkat'],
                'KEMBALI_TRAINING' => $data['waktu_pulang'],
                'MANFAAT_BAGI_PERUSAHAAN' => $data['manfaat_perusahaan'],
                'MANFAAT_BAGI_KARYAWAN' => $data['manfaat_karyawan'],
                'KOMPETENSI_DESC' => $data['name-kompetensi'],
                'KODE_KOMPETENSI' => $data['kode-pengembangan'],
                'STATUS' => $kodeStatus,
            ]);
    }

    public function getAll()
    {
        return DB::table('pocket_moving_tbl_t_pelatihan')
        ->orderBy('CREATE_AT', 'desc') 
        ->get();
    }


    public function getAllWithUsername()
    {
    $data = DB::table('pocket_moving_tbl_t_pelatihan')
        ->join('users', 'pocket_moving_tbl_t_pelatihan.nrp', '=', 'users.nrp')
        ->select('pocket_moving_tbl_t_pelatihan.*', 'users.name as username','users.departemen as departemen', 'users.divisi as divisi', 'users.distrik as distrik') 
        ->get();

    return $data;
    }

    public function send($userId, $userRole, $keterangan, $selectedpelatihanId)
    {
        $pelatihan = DB::table('pocket_moving_tbl_t_pelatihan')->where('PID', $selectedpelatihanId)->first();

        if (!$pelatihan) {
            return "pelatihan not found";
        }

        $currentKodeStatus = $pelatihan->STATUS;
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

        DB::table('pocket_moving_tbl_t_pelatihan')
            ->where('PID', $selectedpelatihanId)
            ->update($updateData);

        return "Status updated successfully";
    }

    public function revisi($revisiName, $selectedpelatihanId, $userRole, $pesanRevisi, $userId)
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

        DB::table('pocket_moving_tbl_t_pelatihan')
            ->where('PID', $selectedpelatihanId)
            ->update([
                'REVISI_BY' => $userId,
                'REVISI_NAME' => $revisiName,
                'status' => $kodeStatus,
                'revisi_desc' => $pesanRevisi
            ]);

        return 'Data pelatihan berhasil di "Revisi"';
    }

    public function reject($rejectName, $selectedpelatihanId, $pesanReject, $userId)
    {
    
        DB::table('pocket_moving_tbl_t_pelatihan')
            ->where('PID', $selectedpelatihanId)
            ->update([
                'REJECT_BY' => $userId,
                'REJECT_NAME' => $rejectName,
                'status' => 8,
                'REJECT_DESC' => $pesanReject
            ]);

        return 'Data pelatihan Berhasil di "Reject"';
    }

    public function delete($selectedpelatihanId)
    {
        try {
            DB::table('pocket_moving_tbl_t_pelatihan')->where('PID', $selectedpelatihanId)->delete();
            return 'Data pelatihan Berhasil dihapus.';
        } catch (\Exception $e) {
            return 'Gagal menghapus data pelatihan: ' . $e->getMessage();
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

    public function getByDate($date)
    {
        return DB::table('pocket_moving_tbl_t_pelatihan')
            ->whereDate('MULAI_TRAINING', $date)
            ->orderBy('MULAI_TRAINING', 'desc')
            ->get();
    }
    
    public function getByMonth($date)
    {
        return DB::table('pocket_moving_tbl_t_pelatihan')
            ->whereYear('MULAI_TRAINING', $date->year)
            ->whereMonth('MULAI_TRAINING', $date->month)
            ->orderBy('MULAI_TRAINING', 'desc')
            ->get();
    }
    
    public function getByYear($date)
    {
        return DB::table('pocket_moving_tbl_t_pelatihan')
            ->whereYear('MULAI_TRAINING', $date->year)
            ->orderBy('MULAI_TRAINING', 'desc')
            ->get();
    }
    
    public function getCountAll()
    {
        return DB::table('pocket_moving_tbl_t_pelatihan')
            ->orderBy('MULAI_TRAINING', 'desc')
            ->get();
    }
    
}

?>