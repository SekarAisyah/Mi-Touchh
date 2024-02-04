<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\AdmpRepository;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpParser\Node\Stmt\Return_;

class AdmpController extends Controller
{

    protected $AdmpRepository;

    public function __construct(AdmpRepository $AdmpRepository)
    {
        $this->AdmpRepository = $AdmpRepository;
    }

    public function index()
    {
        $kodeOptions = $this->AdmpRepository->getAllKodeKompetensi();
        $admpData = $this->AdmpRepository->getAll();
        $nrpOptions = User::select('nrp')->distinct()->get();
        return view('/admp/admp', [
            'admpData' => $admpData,
            'nrpOptions' => $nrpOptions,
            'kodeOptions' => $kodeOptions
        ]);
    }

    public function report(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $query = $this->AdmpRepository->getAllWithDate();
        if ($startDate && $endDate) {
            $query->whereBetween('pocket_moving_tbl_t_admp.ADMP_JA_START_DATE', [$startDate, $endDate]);
        }

        $admpData = $query->get();

        return view('/report/report_admp', [
            'admpData' => $admpData,
            'startDate' => $startDate, 
            'endDate' => $endDate,  
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $result = $this->AdmpRepository->create($data);
        
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
        $result = $this->AdmpRepository->edit($data, $id, $userRole);
        
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
        $selectedadmpId = $request->input('admp_id');
        //dd($selectedadmpId);
        $result = $this->AdmpRepository->send($userId, $userRole, $keterangan, $selectedadmpId);
    
        return response()->json(['message' => $result]);
    }

    public function delete(Request $request)
    {

        $selectedadmpId = $request->input('admp_id');
    
        $result = $this->AdmpRepository->delete($selectedadmpId);

        return response()->json(['message' => $result]);
    }

    public function reject(Request $request)
    {
        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role; 
        $rejectName = auth()->user()->username; 
        $selectedadmpId = $request->input('admp_id');
        $pesanReject = $request->input('reject');

        $result = $this->AdmpRepository->reject($rejectName, $selectedadmpId, $pesanReject, $userId);

    return response()->json(['message' => $result]);
    }


    public function revisi(Request $request)
    {

        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role; 
        $revisiName = auth()->user()->username; 
        $selectedadmpId = $request->input('admp_id');
        $pesanRevisi = $request->input('revisi');

        $result = $this->AdmpRepository->revisi($revisiName, $selectedadmpId, $userRole, $pesanRevisi, $userId);

    return response()->json(['message' => $result]);
    }

    public function getEdit($id)
    {
        $admp = $this->AdmpRepository->getById($id);

        return response()->json($admp);
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
        $kompetensiList = $this->AdmpRepository->getKompetensi($kode);
    
        if (!$kompetensiList) {
            return response()->json(['error' => 'Kompetensi not found'], 404);
        }
    
        return response()->json([
            'nama' => $kompetensiList->NAMA,
        ]);
    }
    
    public function exportPDF() {
        return view('admp/admp_pdf');
    }

    public function exportToWord(Request $request)
    {
        $id= $request->input('admp_id');

        $templatePath = 'resources/views/admp/admpMitraBara.docx';
        $phpWord = new TemplateProcessor($templatePath);
        //dd($templatePath);
        $data = $this->AdmpRepository->getById($id);
        $phpWord->setValue('name', $data->name);

        $filename = "admp.docx";
        $phpWord->saveAs($filename);

        return response()->download($filename)->deleteFileAfterSend(true);
    }
}