<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
        echo " Ini adalah halaman Artikel dengan ID : {} ";
    }
}
