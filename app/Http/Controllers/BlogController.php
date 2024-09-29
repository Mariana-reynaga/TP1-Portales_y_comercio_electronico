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
            'title'=>'required | min:10 | max:50',
            'author'=>'required | min:10',
            'post' => 'required'
        ],[
            'title.required' => 'El titulo es requerido',
            'title.min' => 'El titulo debe tener un minimo de 10 caracteres',
            'title.max' => 'El titulo debe tener un maximo de 50 caracteres',
            // //
            'author.required' => 'El autor es requerido',
            'author.min' => 'El autor debe tener un minimo de 10 caracteres',
            // //
            'post.required' => 'El post es requerido'
        ]);

        $input = $req->only(['title','author','post']);

        Blog::create($input);

        return redirect()
               ->route('blog.admin')
               ->with('feedback.notif.admin', 'Articulo <b>"'.e($input['title']).'"</b> fue creado exitosamente');
    }

    public function editBlogView(int $id){
        $blogData = Blog::find($id);

        return view('blog.edit-form', [
            'articulo' => $blogData
        ]);
    }

    public function editBlog(Request $req, int $id){
        $req->validate([
            'title'=>'required | min:10 | max:50',
            'author'=>'required | min:10',
            'post' => 'required'
        ],[
            'title.required' => 'El titulo es requerido',
            'title.min' => 'El titulo debe tener un minimo de 10 caracteres',
            'title.max' => 'El titulo debe tener un maximo de 50 caracteres',
            // //
            'author.required' => 'El autor es requerido',
            'author.min' => 'El autor debe tener un minimo de 10 caracteres',
            // //
            'post.required' => 'El post es requerido'
        ]);

        $input = $req->only(['title','author', 'post']);

        $articulo = Blog::findOrFail($id);

        $articulo->update($input);

        return redirect()
               ->route('blog.admin')
               ->with('feedback.notif.admin', 'Articulo <b>"'.e($input['title']).'"</b> fue editado exitosamente');
    }

    public function deleteBlog(int $id){
        $articulo = Blog::findOrFail($id);

        $articulo -> delete();

        return redirect()
            ->route('blog.admin')
            ->with('feedback.notif.admin', 'El articulo <b>"'.e($articulo['title']).'"</b> se elimino con exito');
    }
}
