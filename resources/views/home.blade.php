@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-3">
                <h1>Dashboard</h1>
            <div class="card">
                <div class="car-body" align='center'>
                    <h2>{{ Auth::user()->name}}</h2>
                    <h5>{{ Auth::user()->nationality }}</h5>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-5">
                            <a href="{{ route('user.followers', ['id' => Auth::user()->id]) }}" >
                            {{ Auth::user()->followers()->count() }}
                            <h5>Followers</h5>
                            </a>
                        </div>
                        <div class="col-md-5">
                            <a href="{{ route('user.following', ['id' => Auth::user()->id]) }}" >
                            {{ Auth::user()->following()->count() }}
                            <h5>Following</h5>
                            </a>
                        </div>

                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                                <div class="ml-auto">
                                    <a href="{{ route('user_edit', ['user' => Auth::user()->id]) }}" class='btn btn-primary'>Edit</a>
                                </div>
                        </div>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <p>Learned {{ Auth::user()->lessons()->count()}} Lessons</p>
                            </a>
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
