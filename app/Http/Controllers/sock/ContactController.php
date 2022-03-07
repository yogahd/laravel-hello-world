<?php

namespace App\Http\Controllers\sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('sock.contact');
    }
}
