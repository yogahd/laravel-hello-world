<?php

namespace App\Http\Controllers\Prak3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return view('program.program');
    }
}
