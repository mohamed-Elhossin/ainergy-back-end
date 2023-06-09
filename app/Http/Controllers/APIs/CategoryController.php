<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caregory;
class CategoryController extends Controller
{
    //
    public function index()
    {
        $category = Caregory::all();
        $response = [
            "message" => "Send All Data",
            "Data" => $category,
            "Status" => 200
        ];
        return response($response, 200);
    }
}
