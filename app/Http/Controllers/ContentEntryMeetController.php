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
}
