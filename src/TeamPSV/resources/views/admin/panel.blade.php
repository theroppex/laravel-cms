@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                    Users
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>Email</th>
                                        <th>Ban</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <th>
                                                {{$user->id}}
                                            </th>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                            <td>
                                                {{$user->surname}}
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                            <td>
                                                @if(!$user->isAdmin())
                                                    @if($user->isBanned())
                                                        <a href="/user/unban/{{$user->id}}" class="btn btn-success">Unban</a>
                                                    @else
                                                        <a href="/user/ban/{{$user->id}}" class="btn btn-danger">Ban</a>
                                                    @endif
                                                @endif
                                            </td>
                                            <td style="text-align: center">
                                                @if(!$user->isAdmin())
                                                    <a href="/user/delete/{{$user->id}}" ><i class="fa fa-trash" style="color: red" aria-hidden="true"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                Text Post
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            Ovde ce ici textualni postovi koje ce admin moci da kontrolise
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection