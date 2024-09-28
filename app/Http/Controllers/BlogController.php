<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $todosBlog = Blog::all();

        return view('blog.index', [
            'blogs' => $todosBlog
        ]);
    }

    public function article(int $id){
        $articleData = Blog::find($id);

        return view('blog.article', [
            'articulo' => $articleData
        ]);
    }
}
