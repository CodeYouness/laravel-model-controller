<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function home(){

        $movie = [];
        return view('pages.home', compact('movie'));
    }
}