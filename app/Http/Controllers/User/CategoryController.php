<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caregory;
class CategoryController extends Controller
{

    public function index()
    {
        $category = Caregory::all();
        return view('userUI.categories.index')->with("category",$category );
    }

}
