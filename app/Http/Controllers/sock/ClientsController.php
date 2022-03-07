<?php

namespace App\Http\Controllers\sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function clients(){
        return view('sock.clients');
    }
}
