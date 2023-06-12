<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\SpipReport;
use Illuminate\Support\Facades\Storage;

use Barryvdh\DomPDF\PDF;


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

   

}
