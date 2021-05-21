@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-3">
                <h1>Dashboard</h1>
            <div class="card">
                <div class="car-body" align='center'>
                    <h2>{{ $user->name}}</h2>
                    <h5>{{ $user->nationality }}</h5>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <a href="{{ route('user.followers', ['id' => $user->id]) }}" >
                            {{ $user->followers()->count() }}
                            <h5>Followers</h5>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <a href="{{ route('user.following', ['id' => $user->id]) }}" >
                            {{ $user->following()->count() }}
                            <h5>Following</h5>
                            </a>
                        </div>

                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            @if (Auth::user()->id != $user->id)
                                @if (Auth::user()->is_following($user->id) || Auth::user()->id == $user->id)
                                    <div class="ml-auto">
                                        <a href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}" class='btn btn-danger'>Unfollow</a>
                                    </div>
                                @else
                                    <div class="ml-auto" >
                                        <a href="{{ route('user.follow', ['followed_id' => $user->id]) }}" class='btn btn-primary'>Follow</a>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                    <br>



                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <h2>Activities</h2>
                <div class="car-body">

                </div>
            </div>
        </div>
    </div>



</div>
@endsection
