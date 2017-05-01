<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
    //
    public function contact()
    {
        return view('admin.contact');
    }
    public function home()
    {
        return view('admin.home');
    }
}
