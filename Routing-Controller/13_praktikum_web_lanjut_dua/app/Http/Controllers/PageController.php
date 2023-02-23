<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        return '<h1>Selamat Datang</h1>';
    }

    function about(){
        return 'NIM  : 2141720210 <br> Nama : Bagus Rezky Adhyaksa';
    }

    function articles($id){
        echo"Halaman Artikel dengan ID : $id";
    }
}
