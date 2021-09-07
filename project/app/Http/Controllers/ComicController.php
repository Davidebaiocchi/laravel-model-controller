<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    public function comics() {
        
        $albums = Comic::all();
        return view('comics', ['albums' =>  config('comics') ] ); 
    }
}
