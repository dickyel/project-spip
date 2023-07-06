<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpipEntryMeet;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\Datatables;


class ContentEntryMeetController extends Controller
{
    //
    public function index()
    {
        $meets = SpipEntryMeet::all();
        return view('pages.entry-meet',[
            'meets' => $meets
        ]);
    }

    public function save_meet(Request $request)
    {
        $data = $request->all();
        
        $meet = SpipEntryMeet::create($data);

        if($meet){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('content-entry-meet');
    }

    public function edit($id)
    {
        $meet = SpipEntryMeet::findOrFail($id);

        return view('pages.edit-entry-meet',[
            'meet' => $meet,
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        
        $meet = SpipEntryMeet::findOrFail($id);

        $meet->update($data);

        return redirect()->route('content-entry-meet');
    }
}
