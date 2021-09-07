<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function comics() {
        $comics = config('comics');
        $data = ['albums' => $comics];
        return view('comics')->name('comics', $data);
    }
}
