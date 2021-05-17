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
                            {{ Auth::user()->followers()->count() }}
                            <h5>Followers</h5>
                        </div>
                        <div class="col-md-5">
                            {{ Auth::user()->following()->count() }}
                            <h5>Following</h5>
                        </div>

                    </div>


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
