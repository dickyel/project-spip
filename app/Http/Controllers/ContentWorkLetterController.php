<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\SpipWorkLetter;
use Illuminate\Support\Facades\Storage;

use \PDF;



class ContentWorkLetterController extends Controller
{
    //
    public function index(Request $request)
    {
        $letters = SpipWorkLetter::when(request()->keyword, function($letters) {
            $letters = $letters->where('work_letter_title', 'like', "%". request()->keyword . '%');
        })->latest()->paginate(10);
        return view('pages.work-letter',[
            'letters' => $letters
        ]);
    }

    public function save_letters(Request $request)
    {

        $data = $request->all();
     
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/work-letters','public');
        $data['work_letter_file'] = $request->file('work_letter_file')->store('assets/file-work-letter','public');

        $letter = SpipWorkLetter::create($data);

        return redirect()->route('content-work-letter');
    }

    public function preview($id)
    {
        $letter = SpipWorkLetter::find($id);
        $pdf = \PDF::loadView('pages.preview', compact('report'));

        return $pdf->stream('preview.pdf');
    }

    public function download($id)
    {
        $letter = SpipWorkLetter::find($id);
        // Mendapatkan path file report yang disimpan
        $filePath = storage_path('app/public/' . $letter->work_letter_file);
        // Menggunakan helper download untuk mengirimkan file ke browser pengguna
        return response()->download($filePath);
    }

    public function delete_letter($id)
    {
        $letter = SpipWorkLetter::find($id);

        // Hapus file thumbnail dan document_file dari storage
        Storage::disk('public')->delete($letter->thumbnail);
        Storage::disk('public')->delete($letter->work_letter_title);

        // Hapus laporan dari database
        $letter->delete();

        return redirect()->route('content-work-letter')->with('success', 'Laporan berhasil dihapus.');
    }

    
    public function edit($id)
    {
        $letter = SpipWorkLetter::findOrFail($id);

        return view('pages.edit-work-letter',[
            'letter' => $letter,
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $letter = SpipReport::findOrFail($id);
     
        $data['thumbnail'] = $request->file('thumbnail')->store('assets/work-letters','public');
        $data['work_letter_file'] = $request->file('work_letter_file')->store('assets/file-work-letter','public');

        $letter->update($data);

        return redirect()->route('content-work-letter');
    }
    

}
