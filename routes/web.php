<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//index adalah nama function di class controller
Route::get('/', [PostController::class,'index']);

//show adalah nama function di class controller
Route::get('home/{post:slug}',[PostController::class,'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' =>Category::all()
    ]);
});

//show adalah nama function di class controller
Route::get('categories/{category:slug}',function(Category $category){
    return view('category',[
        'title'=>$category->name,
        'posts' =>$category->posts,
        'category'=>$category->name

    ]);

    
Route::get('/create', function(){
    return view('create',[
        'title' => 'CREATE',
    ]);
});

});


