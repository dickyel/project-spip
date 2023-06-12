<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpipMethodology;
use App\Models\SpipOther;
use App\Models\SpipGuide;
use RealRashid\SweetAlert\Facades\Alert;

class ContentOtherController extends Controller
{
    //
    public function index()
    {
        $others = SpipOther::all();   
        return view('pages.other',[
            'others' => $others
        ]);
    }

    public function update_other(Request $request, $id){
        $data = $request->all();
 
        $other = SpipOther::findOrFail($id);

        $other->update($data);

        if($other){
            Alert::success('Berhasil','Data Telah diupdate');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Diupdate');
            return back();
        }

        return redirect()->route('content-other');
    }
    
    public function save_other(Request $request)
    {
        $data = $request->all();

        $other = SpipOther::create($data);

        if($other){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('content-other');
    }

    public function delete_other($id)
    {
        $other = SpipOther::findOrFail($id);
        $other->delete();

        return redirect()->route('content-other');
    }

}
