<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{

    public function store(Request $request, $ServicesId)
    {
        $userId =  $request->userId;

        $ifLikeHava = Like::where("userId", $userId)->where("servicesId", $ServicesId)->first();

        if ($ifLikeHava != null) {
            if ($ifLikeHava->status == 1) {
                $ifLikeHava->status = 0;
                $ifLikeHava->save();
                $response = [
                    "message" => "Update Like Done",
                    "Data" => $ifLikeHava,
                    "Status" => 200
                ];
                return response($response, 200);
            } else {
                $ifLikeHava->status = 1;
                $ifLikeHava->save();
                $response = [
                    "message" => "Update Like Done",
                    "Data" => $ifLikeHava,
                    "Status" => 200
                ];
                return response($response, 200);
            }
        } else {
            $like = new Like();
            $like->status = 1;
            $like->userId = $request->userId;
            $like->servicesId = $ServicesId;
            $like->save();
            $response = [
                "message" => "Send Like Done",
                "Data" => $like,
                "Status" => 200
            ];
            return response($response, 200);
        }
    }
}
