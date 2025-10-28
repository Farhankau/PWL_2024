<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
   public function index(){
        return "selamat datang";
     }

    public function about(){
        return "NIM: 243107050003 - Nama: Abdullah Farhanudin Kau";
    }

    public function articles($id){
        return "Halaman Artikel dengan ID " . $id;
    } 
}