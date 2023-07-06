<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

use \PDF;



class ContentMasterUserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('pages.master-user',[
            'users' => $users
        ]);
    }

    public function save_users(Request $request)
    {
        $data = $request->all();
        
        $user = User::create($data);

        if($user){
            Alert::success('Berhasil','Data Telah Ditambahkan');
            return back();
        }
        else{
            Alert::error('Gagal','Data  Tidak Ditambahkan');
            return back();
        }

        return redirect()->route('content-master-user');
    }

}
