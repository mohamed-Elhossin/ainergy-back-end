<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commint;
use App\Models\views\Joincommints;
class CommintController extends Controller
{

    public function index()
    {
        $commint = Joincommints::all();
        $response = [
            "message" => "Send All commints",
            "Data" => $commint,
            "Status" => 200
        ];
        return response($response, 200);
    }

    public function store(Request $request)
    {

        $request->validate([
            'description' => "required|string",
        ]);
        $commint = new Commint();
        $commint->description = $request->description;
        $commint->userId = $request->userId;
        $commint->servicesId = $request->servicesId;
        $commint->save();

        $response = [
            "message" => "Create Commint ",
            "Data" => $commint,
            "Status" => 201
        ];
        return response($response, 201);
    }


    public function destroy($id)
    {
        $commint =  Commint::find($id);


        $commint->delete();
        $response = [
            "message" => "Delete commint Done",
            "Data" => $commint,
            "Status" => 200
        ];
        return response($response, 201);
    }
}
