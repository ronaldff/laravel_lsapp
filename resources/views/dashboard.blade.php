@php
    global $i;
    $i = 0;
@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{url('/posts/create')}}" class="btn btn-dark">Create Post</a>
                    <h3 class="my-3">Your Blog Posts</h3>
                    @if (count($posts) > 0)
                    <table class="table table-dark table-hover text-center">
                            <thead>
                              <tr>
                                <th>Sr.No</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Cover Image</th>
                                <th colspan="5">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td><?php echo $i += 1; ?></td>
                                        <td>{{$post->title}}</td>
                                        <td>{!! $post->body !!}</td>
                                        <td>
                                            <a href="{{url('/posts')}}/{{$post->id}}">
                                                <img src="{{asset('storage/app/public/cover_image')}}/{{$post->cover_image}}" alt="dc" style="width:50%;">
                                            </a>
                                        </td>
                                        
                                        <td>
                                        <a href="{{url('/posts')}}/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                                {!! Form::hidden('_method', 'DELETE')!!}
                                                
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                            
                        @else
                            <p>You Have No Post</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
