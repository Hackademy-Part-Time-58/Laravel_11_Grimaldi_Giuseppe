<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage(){
        $articles=Article::all();

        return view('homepage',compact('articles'));
    }
    public function contacts(){

        return view('contacts');
    }
    public function chiSiamo(){

        return view('chi-siamo');
    }
}
