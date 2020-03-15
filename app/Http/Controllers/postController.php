<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function post()
    {
        return view('allPost.post');
    }
    public function addCategory()
    {
        return view('allPost.addCategory');
    }
    public function allCategory()
    {
        return view('allPost.allCategory');
    }
}
