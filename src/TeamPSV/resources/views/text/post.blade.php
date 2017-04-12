@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row" style="background-color: white">
                <div class="col-md-10">
                    <h1>{{$post->title}}</h1>
                </div>
                <div class="col-md-2">
                    <h3>By: {{$post->user->name}}</h3>
                </div>
            </div>
            <div class="row" style="background-color: white">
                <div class="col-md-12">
                    {!! $post->body !!}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="comment">Your Comment</label>
                            <textarea class="form-control" name="comment" id="comment" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapsecoms">Comments </a>
                                </h4>
                            </div>
                            <div id="collapsecoms" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Ovde ce ici komenti
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection