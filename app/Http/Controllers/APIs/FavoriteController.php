<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{

    public function index($id)
    {
        $favCategories = DB::table("favoritecategories")->where("userId", $id)->get();
        $response = [
            "message" => "Create Your Fav categories ",
            "Data" => $favCategories,
            "Status" => 201
        ];
        return response($response, 201);
    }

    public function store(Request $request)
    {

        $fav = new Favorite();

        $fav->userId = $request->userId;
        $fav->category1 = $request->category1;
        $fav->category2 = $request->category2;
        $fav->category3 = $request->category3;
        $fav->save();

        $response = [
            "message" => "Create Your Fav categories ",
            "Data" => $fav,
            "Status" => 201
        ];
        return response($response, 201);
    }

    public function update(Request $request, $id)
    {


        $fav =  Favorite::find($id);

        $fav->userId = $request->userId;
        $fav->category1 = $request->category1;
        $fav->category2 = $request->category2;
        $fav->category3 = $request->category3;
        $fav->save();

        $response = [
            "message" => "Update Your Fav categories ",
            "Data" => $fav,
            "Status" => 201
        ];
        return response($response, 201);
    }
}
