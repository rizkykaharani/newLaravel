<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('home',[
            "title" =>"All Posts",
            // Post:: mengambil dari model tadi yang dikasih nama Post
            // all () adalah nama method di kelas model agar datanya keambil di routes
            // jangan lupa use kelas model diatas file ini
            "post" => Post::all()

            // mengambil data yang beru di masukan
            // "post" => Post::latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "SLUG",
            // find() adalah function dikelas model
            "isi" =>$post
        ]);
    }

    public function create(){
        return view('create');
    }
}
