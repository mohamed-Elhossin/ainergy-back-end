<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserUiController extends Controller
{
    public function home(){
        return view('userUI.index');
    }
}
