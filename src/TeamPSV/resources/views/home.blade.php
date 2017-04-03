@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    OVO JE POCETNA STRANICA NA KOJU CE DOLAZITI KORISNIK NAKON LOGOVANJA <br>

                    You are logged in!<br>

                    Your Role is: {{\Illuminate\Support\Facades\Auth::user()->role->type}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
