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
     * Deletes user
     *
     * @param User $user
     */
    public function deleteUser(User $user){
        if($user && !$user->isAdmin()){
            $user->delete();
        }
        return redirect('admin-panel');
    }
}
