<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;
use App\User;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function follow(User $user, Request $requests){

        Follow::Create([
            'user_id' => Auth::user()->id,
            'follow_id' => $user->id
        ]);

        return back();
    }

    public function unfollow(Follow $follows){

        Auth::user()->follows->first->delete();

        return back();
    }

    public function followget($id){

        $followed_user = User::find($id);
        Auth::user()->following()->attach($followed_user);
        return back();
    }

    public function unfollowget($id){
        $followed_user = User::find($id);
        Auth::user()->following()->detach($followed_user);
        return back();
    }

    public function following($id){
        $user = User::find($id);
        $follows = $user->following()->get();
        return view('follows', compact('follows', 'user'));
    }

    public function followers($id){
        $user = User::find($id);
        $follows = $user->followers()->get();
        return view('follows', compact('follows', 'user'));
    }
}

