<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\pelatihanRepository;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpParser\Node\Stmt\Return_;

class PelatihanController extends Controller
{

    protected $pelatihanRepository;

    public function __construct(pelatihanRepository $pelatihanRepository)
    {
        $this->pelatihanRepository = $pelatihanRepository;
    }

    public function index()
    {
        $kodeOptions = $this->pelatihanRepository->getAllKodeKompetensi();
        $pelatihanData = $this->pelatihanRepository->getAll();
        $nrpOptions = User::select('nrp')->distinct()->get();
        return view('/pelatihan/pelatihan', [
            'pelatihanData' => $pelatihanData,
            'nrpOptions' => $nrpOptions,
            'kodeOptions' => $kodeOptions
        ]);
    }

    public function report(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $query = $this->pelatihanRepository->getAllWithDate();
        if ($startDate && $endDate) {
            $query->whereBetween('pocket_moving_tbl_t_pelatihan.MULAI_TRAINING', [$startDate, $endDate]);
        }

        $pelatihanData = $query->get();

        return view('/report/report_pelatihan', [
            'pelatihanData' => $pelatihanData,
            'startDate' => $startDate, 
            'endDate' => $endDate,  
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $result = $this->pelatihanRepository->create($data);
        
        if ($result) {
            return Response::json(['status' => 'success']);
        } else {
            return Response::json(['status' => 'error']);
        }
    }

    public function edit($id, Request $request)
    {
        $data = $request->all();
        $userRole = auth()->user()->id_role; 
        $result = $this->pelatihanRepository->edit($data, $id, $userRole);
        
        if ($result) {
            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'error']);
        }
    }

    public function send(Request $request)
    {
        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role;  
        $keterangan = $request->input('send-link');
        $selectedpelatihanId = $request->input('pelatihan_id');
        //dd($selectedpelatihanId);
        $result = $this->pelatihanRepository->send($userId, $userRole, $keterangan, $selectedpelatihanId);
    
        return response()->json(['message' => $result]);
    }

    public function delete(Request $request)
    {

        $selectedpelatihanId = $request->input('pelatihan_id');
    
        $result = $this->pelatihanRepository->delete($selectedpelatihanId);

        return response()->json(['message' => $result]);
    }

    public function reject(Request $request)
    {
        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role; 
        $rejectName = auth()->user()->username; 
        $selectedpelatihanId = $request->input('pelatihan_id');
        $pesanReject = $request->input('reject');

        $result = $this->pelatihanRepository->reject($rejectName, $selectedpelatihanId, $pesanReject, $userId);

    return response()->json(['message' => $result]);
    }


    public function revisi(Request $request)
    {

        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role; 
        $revisiName = auth()->user()->username; 
        $selectedpelatihanId = $request->input('pelatihan_id');
        $pesanRevisi = $request->input('revisi');

        $result = $this->pelatihanRepository->revisi($revisiName, $selectedpelatihanId, $userRole, $pesanRevisi, $userId);

    return response()->json(['message' => $result]);
    }

    public function getEdit($id)
    {
        $pelatihan = $this->pelatihanRepository->getById($id);

        return response()->json($pelatihan);
    }

    public function getUser()
    {
        $nrpOptions = User::select('nrp')->distinct()->get();
        
        return response()->json(['nrpOptions' => $nrpOptions]);
    }

    public function getUserInfo(Request $request)
    {
        $nrp = $request->input('nrp');
        $user = User::where('nrp', $nrp)->first();

        return response()->json([
            'nama' => $user->name,
            'jabatan' => $user->jabatan,
            'departemen' => $user->departemen,
            'divisi' => $user->divisi,
            'distrik' => $user->distrik,
        ]);
    }

    public function getKompetensi(Request $request)
    {
        $kode = $request->input('kode');
        $kompetensiList = $this->pelatihanRepository->getKompetensi($kode);
    
        if (!$kompetensiList) {
            return response()->json(['error' => 'Kompetensi not found'], 404);
        }
    
        return response()->json([
            'nama' => $kompetensiList->NAMA,
        ]);
    }
    
    public function exportPDF() {
        return view('pelatihan/pelatihan_pdf');
    }

    public function exportToWord(Request $request)
    {
        $id= $request->input('pelatihan_id');

        $templatePath = 'resources/views/pelatihan/pelatihanMitraBara.docx';
        $phpWord = new TemplateProcessor($templatePath);
        //dd($templatePath);
        $data = $this->pelatihanRepository->getById($id);
        $phpWord->setValue('name', $data->name);

        $filename = "pelatihan.docx";
        $phpWord->saveAs($filename);

        return response()->download($filename)->deleteFileAfterSend(true);
    }
}