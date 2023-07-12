<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commint;
use App\Models\views\Joincommints;
class CommintController extends Controller
{


    public function store(Request $request,$id)
    {

        $request->validate([
            'description' => "required|string",
        ]);
        $commint = new Commint();
        $commint->description = $request->description;
        $commint->userId = auth()->user()->id;
        $commint->servicesId = $id;
        $commint->save();


        return redirect()->back() ;
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
