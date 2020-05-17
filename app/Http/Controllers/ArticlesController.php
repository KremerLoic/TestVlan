<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class ArticlesController extends Controller
{
    public function showActive(){

        $articles = Articles::where('is_active', 1)->get();

       return view('article',[
           'articles' => $articles
       ]);


    }
}
