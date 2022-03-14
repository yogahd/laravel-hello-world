<?php

namespace App\Http\Controllers\sock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ClientsController extends Controller
{
    public function clients(){
        $data = Shop::all();
        return view ('sock.clients',['daftar' => $data]);
    }
}
