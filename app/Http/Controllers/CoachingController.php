<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repository\CoachingRepository;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;
use App\Models\User;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpParser\Node\Stmt\Return_;

class CoachingController extends Controller
{

    protected $CoachingRepository;

    public function __construct(CoachingRepository $CoachingRepository)
    {
        $this->CoachingRepository = $CoachingRepository;
    }

    public function index()
    {
        $kodeOptions = $this->CoachingRepository->getAllKodeKompetensi();
        $coachingData = $this->CoachingRepository->getAll();
        $nrpOptions = User::select('nrp')->distinct()->get();
        return view('/coaching/coaching', [
            'coachingData' => $coachingData,
            'nrpOptions' => $nrpOptions,
            'kodeOptions' => $kodeOptions
        ]);
    }

    public function report(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        
        $query = $this->CoachingRepository->getAllWithDate();
        if ($startDate && $endDate) {
            $query->whereBetween('pocket_moving_tbl_t_coaching.COACHING_DATE', [$startDate, $endDate]);
        }

        $coachingData = $query->get();

        return view('/report/report_coaching', [
            'coachingData' => $coachingData,
            'startDate' => $startDate, 
            'endDate' => $endDate,  
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $result = $this->CoachingRepository->create($data);
        
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
        $result = $this->CoachingRepository->edit($data, $id, $userRole);
        
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
        $selectedcoachingId = $request->input('coaching_id');
        //dd($selectedcoachingId);
        $result = $this->CoachingRepository->send($userId, $userRole, $keterangan, $selectedcoachingId);
    
        return response()->json(['message' => $result]);
    }

    public function delete(Request $request)
    {

        $selectedcoachingId = $request->input('coaching_id');
    
        $result = $this->CoachingRepository->delete($selectedcoachingId);

        return response()->json(['message' => $result]);
    }

    public function reject(Request $request)
    {
        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role; 
        $rejectName = auth()->user()->username; 
        $selectedcoachingId = $request->input('coaching_id');
        $pesanReject = $request->input('reject');

        $result = $this->CoachingRepository->reject($rejectName, $selectedcoachingId, $pesanReject, $userId);

    return response()->json(['message' => $result]);
    }


    public function revisi(Request $request)
    {

        $userId = auth()->user()->id; 
        $userRole = auth()->user()->id_role; 
        $revisiName = auth()->user()->username; 
        $selectedcoachingId = $request->input('coaching_id');
        $pesanRevisi = $request->input('revisi');

        $result = $this->CoachingRepository->revisi($revisiName, $selectedcoachingId, $userRole, $pesanRevisi, $userId);

    return response()->json(['message' => $result]);
    }

    public function getEdit($id)
    {
        $coaching = $this->CoachingRepository->getById($id);

        return response()->json($coaching);
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
        $kompetensiList = $this->CoachingRepository->getKompetensi($kode);
    
        if (!$kompetensiList) {
            return response()->json(['error' => 'Kompetensi not found'], 404);
        }
    
        return response()->json([
            'nama' => $kompetensiList->NAMA,
        ]);
    }
    
    public function exportPDF() {
        return view('coaching/coaching_pdf');
    }

    public function exportToWord(Request $request)
    {
        $id= $request->input('coaching_id');

        $templatePath = 'resources/views/coaching/coachingMitraBara.docx';
        $phpWord = new TemplateProcessor($templatePath);
        //dd($templatePath);
        $data = $this->CoachingRepository->getById($id);
        $phpWord->setValue('name', $data->name);

        $filename = "coaching.docx";
        $phpWord->saveAs($filename);

        return response()->download($filename)->deleteFileAfterSend(true);
    }
}