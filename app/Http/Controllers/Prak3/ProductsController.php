<?php

namespace App\Http\Controllers\Prak3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product(){
        return view('products.products');
    }
}
