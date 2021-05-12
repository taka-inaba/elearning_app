<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;
use App\User;

class FollowController extends Controller
{
    public function follow(User $user, Request $requests){

        Follow::Create([
            'user_id' => Auth::user()->id,
            'follow_id' => $user->id
        ]);

        return back();
    }
    }

    public function unfollow(Follow $follows){

        Auth::user()->follows->first->delete();

        return back();
    }
}
