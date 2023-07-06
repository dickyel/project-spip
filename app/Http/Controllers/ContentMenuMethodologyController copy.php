<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpipMethodology;
use App\Models\SpipOther;
use App\Models\SpipGuide;
use RealRashid\SweetAlert\Facades\Alert;

class ContentMenuMethodologyController extends Controller
{
    //
    public function index()
    {
        $methods = SpipMethodology::all();   
        return view('pages.menu-methodology',[
            'methods' => $methods
        ]);
    }

    public function update_method(Request $request, $id){
        $data = $request->all();
 
        $method = SpipMethodology::findOrFail($id);

        $method->update($data);

        if($method){
            Alert::success('Berhasil','Data Telah diupdate');
            return back();
        }
        else{
            Alert::error('Gagal','Data gagal Diupdate');
            return back();
        }

        return redirect()->route('content-methodology');
    }
    
    public function save_method(Request $request)
    {
        $data = $request->all();

        $method = SpipMethodology::create($data);

        if($method){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('content-methodology');
    }

    public function delete_method($id)
    {
        $method = SpipMethodology::findOrFail($id);
        $method->delete();

        return redirect()->route('content-methodology');
    }

}
