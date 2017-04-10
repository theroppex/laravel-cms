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

    /**
     * Dohvata postove na osnovu kategorije
     *
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPostsByCategory(Category $category){
        $posts = TextPost::where('cat-id', $category->id)->paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    /**
     * Dohvata sve besplatne postove
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllFreePosts(){
        $posts = TextPost::where('type', 'free')->paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    /**
     * Dohvata sve placene postove
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllPaidPosts(){
        $posts = TextPost::where('type', 'paid')->paginate(10);
        return view('text.list', ['posts' => $posts]);
    }

    /**
     * Korisniku prikazuje besplatan post
     *
     * @param TextPost $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getFreePost(TextPost $post){
        return view('text.post', ['post' => $post]);
    }

    //TODO FREE PAID POSTS OMG
}
