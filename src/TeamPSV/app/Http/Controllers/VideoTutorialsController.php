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
}
