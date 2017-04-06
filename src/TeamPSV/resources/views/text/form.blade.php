@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/create-post" method="post" enctype="multipart/form-data">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" required>
                </div>

                <div class="form-group">
                    <label for="type">Type</label> <br/>
                    <label class="radio-inline"><input type="radio" name="type" checked>Free</label>
                    <label class="radio-inline"><input type="radio" name="type">Paid</label>
                </div>

                <div class="form-group">
                    <label for="body">Your post</label>
                    <textarea name="body" class="form-control" rows="15"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection