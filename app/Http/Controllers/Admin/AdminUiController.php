<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUiController extends Controller
{

    public function home(){
        return view('adminUI.index');
    }
    public function register(){
        return view('adminUI.pages-register');
    }
    public function login(){
        return view('adminUI.pages-login');
    }
    public function profile(){
        return view('adminUI.admin-profile');
    }


}
