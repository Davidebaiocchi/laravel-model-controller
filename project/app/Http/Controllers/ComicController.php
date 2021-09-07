<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
class ComicController extends Controller
{
    public function comics() {
        
        $comics = Comic::all();
        return view('comic', compact('comics'));
    }
}
