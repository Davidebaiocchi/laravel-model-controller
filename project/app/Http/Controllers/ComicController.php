<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    public function comics() {
        
        $stories = Comic::all();
        return view('comics', $stories, ['albums' =>  config('comics') ] ); 
    }
}
