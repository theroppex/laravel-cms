<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoTutorialsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('banned');
    }


    /**
     * Vraca view sa listom video postova
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getVideoTutorials()
    {
        $videoposts = TextPost::paginate(10);
        return view('video.list', ['videoposts' => $videoposts]);
    }



    /**
     * Dohvata postove na osnovu kategorije
     *
     * @param Category $category
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPostsByCategory(Category $category){
        $videoposts = VideoPost::where('cat-id', $category->id)->paginate(10);
        return view('video.list', ['videoposts' => $videoposts]);
    }


/* Dohvata sve besplatne postove
*
* @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
*/
    public function getAllFreePosts(){
        $videoposts = VideoPost::where('type', 'free')->paginate(10);
        return view('video.list', ['videoposts' => $videoposts]);
    }



    /**
     * Dohvata sve placene postove
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllPaidPosts(){
        $videoposts = VideoPost::where('type', 'paid')->paginate(10);
        return view('video.list', ['videoposts' => $videoposts]);
    }

    /**
     * Prikazuje sve postove koji pripadaju jednom korisniku
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllPostsByUser(User $user){
        $videoposts = $user->videoPosts()->paginate(10);
        return view('video.list', ['videoposts' => $videoposts]);
    }


    /**
     * Funkcija koja pretrazuje postove na osnovu naslova, tipa, opisa, tela...
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function searchPosts(Request $request){
        $this->validate($request,
            [
                'search' => 'required|min:3|max:120'
            ]
        );

        $videoposts = VideoPost::search($request->search)->paginate(10);
        return view('video.list', ['videoposts' => $videoposts]);
    }



    /**
     * Korisniku prikazuje besplatan post
     *
     * @param TextPost $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getvideoPost(VideoPost $videopost){
        if(Auth::user()->can('view', $videopost)) {
            $comments = $videopost->comments;
            return view('video.post', ['videopost' => $videopost, 'comments' => $comments]);
        }
        return redirect('subscription');
    }



    /**
     * Brise specifican post
     *
     * @param VideoPost $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteVideoPost(VideoPost $videopost){
        if(Auth::user()->can('delete', $videopost))
        {
            $videopost->delete();
        }
        return redirect()->back();
    }



    /**
     * Funkcija brise izabrani komentar
     *
     * @param TextPostComment $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteVideoPostComment(VideoPostComment $comment){
        if(Auth::user()->can('delete', $comment))
        {
            $comment->delete();
        }
        return redirect()->back();
    }



    /**
     * Funkcija kreira novi komentar za dati tekstualni post
     *
     * @param TextPost $post
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createComment(VideoPost $videopost, Request $request){
        if(Auth::user()->can('create', VideoPostComment::class)) {
            $this->validate($request,
                [
                    'body' => 'required|max:720'
                ]
            );

            VideoPostComment::create(
                [
                    'post_id' => $videopost->id,
                    'user_id' => Auth::user()->id,
                    'body' => $request->body,
                ]
            );
        }
        return redirect()->back();
    }



}














