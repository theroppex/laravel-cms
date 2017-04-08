<?php

namespace App\Http\Controllers;

use App\TextPost;
use Illuminate\Http\Request;

class TextTutorialsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('banned');
    }

    /**
     * Vraca view sa listom postova
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getTextTutorials()
    {
        $posts = TextPost::paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    public function getFreePost(TextPost $post){
        return view('text.post', ['post' => $post]);
    }

    //TODO FREE PAID POSTS OMG
}
