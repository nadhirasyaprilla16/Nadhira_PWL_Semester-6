<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{ 
    public function index(){
        return 'Selamat Datang';
    }  

    public function about(){
        return 'Nadhira Syaprilla Brina / 2141762033';
    }  

    public function articles($id){
        return 'Halaman Artikel dengan ID ' .$id;
    }  
}
