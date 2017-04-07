<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TextPost;
use Illuminate\Support\Facades\Auth;

class AutorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('banned');
    }

    public function getTextForm()
    {
        return view("text.form");
    }


    public function uploadText(Request $request){

        $this->validate($request, [

            'title' => 'required|max:20',
            'description' => 'required|max:50',
            'body' => 'required'




        ]);

        $idUser = Auth::user()->id;
        $title = $request->title;
        $description = $request->description;
        $body = $request->body;

       TextPost::create([
           'user-id' => $idUser,
           'title' => $title,
           'description' => $description,
           'body' => $body,
           'type' => $request->get('type')
       ]);

       return redirect()->back();
    }



}
