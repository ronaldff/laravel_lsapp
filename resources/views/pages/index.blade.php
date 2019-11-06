@extends('layouts.app')

@section('content')
    <div class="jumbotron mt-2 text-center">
        <h1><?php echo $title; ?></h1>
        <p>This is a laravel application from the "Laravel From Scratch" </p>
        <p>
            <a href="{{url('/Login')}}" class="btn btn-primary" role="button">Login</a>
            <a href="{{url('/Register')}}" class="btn btn-primary" role="button">Register</a>

        </p>
    </div>
@endsection
   
