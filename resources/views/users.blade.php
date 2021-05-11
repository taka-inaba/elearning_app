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
                        <a href = "{{ url('/users/' . $user->id) }} ">
                        <h1>{{ $user->name }}</h1>
                        </a>
                        <h5>{{ $user->nationality }}</h5>

                    </div>
                </div>
                @endforeach
        </div>
    </div>



</div>
@endsection
