<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Prikazuje administratorski panel
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function adminPanel(){
        $users = User::all();
        return view('admin.panel', ['users' => $users]);
    }

    /**
     * Deletes user if user is not an admin
     *
     * @param User $user
     */
    public function deleteUser(User $user){
        if($user && !$user->isAdmin()){
            $user->delete();
        }
        return redirect('admin-panel');
    }

    /**
     * Banuje korisnika ukoliko korisnik nije admin
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function banUser(User $user){
        if($user && !$user->isAdmin()){
            $user->banned = true;
            $user->save();
        }
        return redirect('admin-panel');
    }

    /**
     * Unbanuje korsinika ukoliko korisnik nije admin
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function unbanUser(User $user){
        if($user && !$user->isAdmin()){
            $user->banned = false;
            $user->save();
        }
        return redirect('admin-panel');
    }
}
