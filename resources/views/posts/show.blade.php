@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 ">
            <a href="{{url('/posts')}}" class="btn btn-primary mt-2 float-right">Go Back</a>

    </div>

</div>
    <div class="card card-body mt-3">
        <div class="row">
            <div class="col-md-4 col-sm-4">
            <img src="{{asset('storage/app/public/cover_image')}}/{{$post->cover_image}}" alt="dc" style="width:100%;">
            </div>
            <div class="col-md-8 col-sm-8">
                <h1>{{$post->title}}</h1>
                <div>
                    {!! $post->body !!}
                </div>
                <hr>
                <small>Written on : {{$post->created_at}} by {{$post->user->name}}</small>
                @if (!Auth::guest())
                    @if (Auth::user()->id === $post->user_id)
                        <hr>
                        <a href="{{url('/posts')}}/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=>'d-inline']) !!}
                            {!! Form::hidden('_method', 'DELETE')!!}
                            
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!!Form::close()!!}
                    @endif
        
                @endif
            </div>
        </div>
    </div>


@endsection