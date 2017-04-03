@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <table class="table">
                   <thead>
                       <tr>
                           <th>Id</th>
                           <th>Name</th>
                           <th>Surname</th>
                           <th>Email</th>
                           <th>Delete</th>
                       </tr>
                   </thead>
                   <tbody>
                   @foreach($users as $user)
                       <tr>
                           <td>
                               {{$user->id}}
                           </td>
                           <td>
                               {{$user->name}}
                           </td>
                           <td>
                               {{$user->surname}}
                           </td>
                           <td>
                               {{$user->email}}
                           </td>
                           <td style="text-align: center">
                               @if(!\App\User::find($user->id)->isAdmin())
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

@endsection