<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{

    public function index($id)
    {
        $likeCount =  Like::where('servicesId', 9)
            ->where('status', 1)
            ->count();
        $response = [
            "message" => "Send All Likes",
            "Count" => $likeCount,
            "ServiceId" => $id,
            "Status" => 200
        ];
        return response($response, 200);
    }

    public function store(Request $request)
    {

        $like = new Like();
        $like->status = $request->status;
        $like->userId = $request->userId;
        $like->servicesId = $request->servicesId;
        $like->save();

        $response = [
            "message" => "Create like ",
            "Data" => $like,
            "Status" => 201
        ];
        return response($response, 201);
    }

    public function update(Request $request, $id)
    {

        $like = Like::find($id);
        if ($like->status == 1) {
            $like->status = 0;
        } else {
            $like->status = 1;
        }

        $like->userId = $request->userId;
        $like->servicesId = $request->servicesId;
        $like->save();

        $response = [
            "message" => "Update like ",
            "Data" => $like,
            "Status" => 201
        ];
        return response($response, 201);
    }
}
