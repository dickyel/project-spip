<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpipMethodology;
use App\Models\SpipOther;
use App\Models\SpipGuide;
use RealRashid\SweetAlert\Facades\Alert;

class ContentGuideController extends Controller
{
    //
    public function index()
    {
        $guides = SpipGuide::all();   
        return view('pages.tab.tab-guide',[
            'guides' => $guides
        ]);
    }

    public function update_guide(Request $request, $id){
        $data = $request->all();
 
        $guide = SpipGuide::findOrFail($id);

        $guide->update($data);

        if($guide){
            Alert::success('Berhasil','Data Telah diupdate');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Diupdate');
            return back();
        }

        return redirect()->route('content-guide');
    }
    
    public function save_guide(Request $request)
    {
        $data = $request->all();

        $guide = SpipGuide::create($data);

        if($guide){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('content-guide');
    }

    public function delete_guide($id)
    {
        $guide = SpipGuide::findOrFail($id);
        $guide->delete();

        return redirect()->route('content-guide');
    }

}
