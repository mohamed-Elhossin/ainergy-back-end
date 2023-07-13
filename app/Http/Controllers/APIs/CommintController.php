<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commint;
use App\Models\views\Joincommints;
class CommintController extends Controller
{

    // Commint with Service ID
    public function index($id)
    {
        $commint = Joincommints::where("servicesId",$id)->get();
        $response = [
            "message" => "Send All commints On Service $id",
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
