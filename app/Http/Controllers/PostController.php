<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
public function Allpost(){
    $posts = post::latest()->get();
    return view('search',compact('posts'));

}

public function SearchPost(Request $request){


    if (request('search')) {
        $posts = post::where('title', 'like', '%' . request('search') . '%')->get();
    } else {
        $posts = post::all();
    }
    return view('search-results',compact('posts'));
}

}
