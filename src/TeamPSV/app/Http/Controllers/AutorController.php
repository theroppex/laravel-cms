<?php

namespace App\Http\Controllers;

use App\Category;
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

    /**
     * Funkcija vraca pogled sa formom za unos text posta
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getTextForm()
    {
        $cats = Category::all();
        return view("text.form", ['cats' => $cats]);
    }


    /**
     * Funkcija kreira novi text post
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function uploadText(Request $request){

        $this->validate($request, [
            'title' => 'required|max:140|min:30',
            'description' => 'required|max:180|min:30',
            'body' => 'required',
        ]);

        $idUser = Auth::user()->id;
        $title = $request->title;
        $description = $request->description;
        $body = $request->body;
        $catId = $request->get('cat');

       TextPost::create([
           'user-id' => $idUser,
           'title' => $title,
           'description' => $description,
           'body' => $body,
           'type' => $request->get('type'),
           'cat-id' => $catId,
       ]);

       return redirect()->back();
    }
}
