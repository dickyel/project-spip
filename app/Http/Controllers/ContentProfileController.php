<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentProfileController extends Controller
{
    //
    public function index()
    {
        return view('pages.profile');
    }
}
