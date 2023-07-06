<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\SpipReport;
use Illuminate\Support\Facades\Storage;

use \PDF;


class ContentReportController extends Controller
{
    //
    public function index(Request $request)
    {
        $reports = SpipReport::when(request()->keyword, function($reports) {
            $reports = $reports->where('document_title', 'like', "%". request()->keyword . '%');
        })->latest()->paginate(10);
        return view('pages.report',[
            'reports' => $reports
        ]);
    }

    public function save_report(Request $request)
    {

        $data = $request->all();
     
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail','public');
        $data['document_file'] = $request->file('document_file')->store('assets/file-report','public');

        $report = SpipReport::create($data);

        return redirect()->route('content-report');
    }

    public function preview($id)
    {
        $report = SpipReport::find($id);
        $pdf = \PDF::loadView('pages.preview', compact('report'));

        return $pdf->stream('preview.pdf');
    }

    public function download($id)
    {
        $report = SpipReport::find($id);
        // Mendapatkan path file report yang disimpan
        $filePath = storage_path('app/public/' . $report->document_file);
        // Menggunakan helper download untuk mengirimkan file ke browser pengguna
        return response()->download($filePath);
    }

    public function delete_report($id)
    {
        $report = SpipReport::find($id);

        // Hapus file thumbnail dan document_file dari storage
        Storage::disk('public')->delete($report->thumbnail);
        Storage::disk('public')->delete($report->document_file);

        // Hapus laporan dari database
        $report->delete();

        return redirect()->route('content-report')->with('success', 'Laporan berhasil dihapus.');
    }

    public function edit($id)
    {
        $report = SpipReport::findOrFail($id);

        return view('pages.edit-report',[
            'report' => $report,
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $report = SpipReport::findOrFail($id);
     
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/thumbnail','public');
        $data['document_file'] = $request->file('document_file')->store('assets/file-report','public');

        $report->update($data);

        return redirect()->route('content-report');
    }
    

}
