<?php

namespace App\Http\Controllers\User;

use App\Models\Like;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LikeController extends Controller
{

    public function store(Request $request, $id)
    {
        $userId =  auth()->user()->id;

        $ifLikeHava = Like::where("userId", $userId)->where("servicesId", $id)->first();

        if ($ifLikeHava != null) {
            if ($ifLikeHava->status == 1) {
                $ifLikeHava->status = 0;
                $ifLikeHava->save();
                return  redirect()->back();
            } else {
                $ifLikeHava->status = 1;
                $ifLikeHava->save();
                return  redirect()->back();
            }
        } else {
            $like = new Like();
            $like->status = 1;
            $like->userId = auth()->user()->id;
            $like->servicesId = $id;
            $like->save();
            return  redirect()->back();
        }
    }

}
