<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('category');
    }

    public function show($index){
        echo "Halaman <b>$index<b>";
    }
}
