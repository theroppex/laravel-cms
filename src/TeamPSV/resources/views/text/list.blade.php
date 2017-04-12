@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="background-color: white">
            @foreach($posts as $post)
                <div class="row" >
                    <div class="col-md-10">
                        <a href="/text-post/{{$post->type}}/{{$post->id}}" class="text-info"><h1>{{$post->title}}</h1></a>
                        <hr/>
                        <h4>{{$post->description}}</h4>
                        <h6>@if($post->type === 'free')<span class="bg-success"> @else <span class="bg-warning">@endif
                            <a href="/text-posts/type/{{$post->type}}" class="text-info">{{$post->type}}</a></span> | <span class="bg-info">
                            <a href="/text-posts/cat/{{$post->category->id}}" class="text-info">{{$post->category->name}}</a></span>
                        </h6>
                        @can('delete', $post)
                            <a href="/text-posts/delete/{{$post->id}}" class="btn btn-sm btn-danger pull-right">Delete</a>
                        @endcan
                    </div>
                    <div class="col-md-2">
                        <a href="/text-posts/user/{{$post->user->id}}" class="text-info"><h3>By: {{$post->user->name}}</h3></a>
                    </div>
                </div>
                <hr/>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            {!! $posts->render() !!}
        </div>
    </div>

@endsection