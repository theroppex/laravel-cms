@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-10">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="col-md-2">
                    <h3>By: {{$post->user->name}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {!! $post->body !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    Ovde ce ici komenti i te gluposti
                </div>
            </div>
        </div>
    </div>
@endsection