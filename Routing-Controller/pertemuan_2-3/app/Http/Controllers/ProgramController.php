<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //

    public function index(){
        return view('program');
    }

    public function show($index){
        echo "Halaman <b>$index<b>";
    }
}
