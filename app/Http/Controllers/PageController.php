<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo " Selamat Datang ";
    }
    
    public function about(){
        echo " NIM      : 2041720155 <br/>";
        echo " Nama     : Yoga Rahmahadi <br/>";
        echo " Kelas    : TI 2H <br/>";
    }

    public function articles(){
        echo " Ini adalah halaman Artikel dengan ID : {$id} ";
    }
}
