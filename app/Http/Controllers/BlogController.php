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

    public function indexAdminBlog(){
        $todosBlog = Blog::all();

        return view('blog.index_admin', [
            'blogs' => $todosBlog
        ]);
    }

    public function createBlogView(){
        return view('blog.create-form');
    }

    public function createBlog(Request $req){
        $req->validate([
            'blog_title'=>'required | min:10 | max:50',
            'blog_author'=>'required | min:10',
            'blog_tags'=>'required',
            'blog_post' => 'required | min:50'
        ],[
            'blog_title.required' => 'El titulo es requerido.',
            'blog_title.min' => 'El titulo debe tener un minimo de 10 caracteres.',
            'blog_title.max' => 'El titulo debe tener un maximo de 50 caracteres.',
            // //
            'blog_author.required' => 'El autor es requerido.',
            'blog_author.min' => 'El autor debe tener un minimo de 10 caracteres.',
            // //
            'blog_tags.required'=>'Los tags son requeridos.',
            // //
            'blog_post.required' => 'El post es requerido.',
            'blog_post.min' => 'El post debe tener un minimo de 50 caracteres.'
        ]);

        $input = $req->only(['blog_title','blog_author', 'blog_tags','blog_post']);

        Blog::create($input);

        return redirect()
               ->route('blog.admin')
               ->with('feedback.notif.admin', 'Articulo <b>"'.e($input['blog_title']).'"</b> fue creado exitosamente');
    }

    public function editBlogView(int $id){
        $blogData = Blog::find($id);

        return view('blog.edit-form', [
            'articulo' => $blogData
        ]);
    }

    public function editBlog(Request $req, int $id){
        $req->validate([
            'blog_title'=>'required | min:10 | max:50',
            'blog_author'=>'required | min:10',
            'blog_tags'=>'required',
            'blog_post' => 'required | min:50'
        ],[
            'blog_title.required' => 'El titulo es requerido.',
            'blog_title.min' => 'El titulo debe tener un minimo de 10 caracteres.',
            'blog_title.max' => 'El titulo debe tener un maximo de 50 caracteres.',
            // //
            'blog_author.required' => 'El autor es requerido.',
            'blog_author.min' => 'El autor debe tener un minimo de 10 caracteres.',
            // //
            'blog_tags.required'=>'Los tags son requeridos.',
            // //
            'blog_post.required' => 'El post es requerido.',
            'blog_post.min' => 'El post debe tener un minimo de 50 caracteres.'
        ]);

        $input = $req->only(['blog_title','blog_author', 'blog_tags','blog_post']);

        $articulo = Blog::findOrFail($id);

        $articulo->update($input);

        return redirect()
               ->route('blog.admin')
               ->with('feedback.notif.admin', 'Articulo <b>"'.e($input['blog_title']).'"</b> fue editado exitosamente');
    }

    public function deleteBlog(int $id){
        $articulo = Blog::findOrFail($id);

        $articulo -> delete();

        return redirect()
            ->route('blog.admin')
            ->with('feedback.notif.admin', 'El articulo <b>"'.e($articulo['blog_title']).'"</b> se elimino con exito');
    }
}
