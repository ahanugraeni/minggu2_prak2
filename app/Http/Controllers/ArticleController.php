<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        return "Halaman atikel dengan ID ".$id;
    }
}
