@extends('layouts.app')

@section('content')
    <div class="my-4"><h3>Posts</h3></div>
    @if (count($posts) > 0)
      @foreach ($posts as $post)
        <a href="{{url('/posts')}}/<?php echo $post->id;?>">
          <div class="card card-body bg-light mt-2">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <img src="{{asset('storage/app/public/cover_image')}}/{{$post->cover_image}}" alt="dc" style="width:50%;">
              </div>
              <div class="col-md-8 col-sm-8">
                <h3><?php echo $post->title; ?></h3>
                <small>Written On {{$post->created_at}} by {{$post->user->name}}</small>
              </div>
            </div>
          </div>
        </a>
      @endforeach
      <br>
      <div class="float-right">
        {{$posts->links()}}
      </div> 
      
    @else
        <p>No Post Found</p>
    @endif
@endsection