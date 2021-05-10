@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-3">
                <h1>Dashboard</h1>
            <div class="card">
                <div class="car-body" align='center'>
                    <h2>{{ Auth::user()->name}}</h2>
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
