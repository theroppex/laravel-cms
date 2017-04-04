<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutorController extends Controller
{
    public function getTextForm()
    {
        return view("text.form");

    }

}
