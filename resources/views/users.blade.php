<style>

.post-card {
  margin-top: 10px;
  margin-bottom: 10px;
}


</style>


@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            @foreach ($users as $user)
                <div class="card post-card">
                    <div class="car-body">
                        <div class="row">
                            <div class="col-md-10">
                                <a href = "{{ url('/users/' . $user->id) }} ">
                                <h1>{{ $user->name }}</h1>
                                </a>
                                <a>{{ $user->nationality }}</a>
                            </div>
                            <div class="d-flex align-items-center">
                                @if (Auth::user()->is_following($user->id) || Auth::user()->id == $user->id)
                                <div align='right' class="ml-auto">
                                    <a href="{{ route('user.unfollow', ['unfollowed_id' => $user->id]) }}" class='btn btn-danger'>Unfollow</a>
                                </div>
                                @else
                                <div align='right' class="ml-auto" >
                                    <a href="{{ route('user.follow', ['followed_id' => $user->id]) }}" class='btn btn-primary'>Follow</a>
                                </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
        </div>
    </div>



</div>
@endsection
