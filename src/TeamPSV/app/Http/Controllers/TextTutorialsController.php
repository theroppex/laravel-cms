<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function getPostsByCategory(Category $category){
        $posts = TextPost::where('cat-id', $category->id)->paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    public function getAllFreePosts(){
        $posts = TextPost::where('type', 'free')->paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    public function getAllPaidPosts(){
        $posts = TextPost::where('type', 'paid')->paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    public function getFreePost(TextPost $post){
        return view('text.post', ['post' => $post]);
    }

    //TODO FREE PAID POSTS OMG
}
