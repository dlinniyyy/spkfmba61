<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
}
