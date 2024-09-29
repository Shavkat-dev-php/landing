<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(): View|Factory|Application
    {
        $posts = Post::all();
        return view('main')->with('posts', $posts);
    }
}
