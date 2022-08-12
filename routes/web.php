<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', function () {
    return view('posts', [
//        'posts' => Post::with('category')->get(),
    'posts'=>Post::all()
    ]);
});



// Route Wildcard Constraints
Route::get('/posts/{post:slug}', function (Post $post) {
    // $post_content = Post::findOrFail($post);

    //    ddd($post_content);

    return view('post', [
        'post_content' => $post
    ]);
});
//})->where('slug', '[A-z_\-]+');
Route::get('categories/{category:id}',function (Category $category){
return view('posts',[
    'posts'=>$category->posts
]);
});
Route::get(
    '/test',
    function () {
        Post::create([
            'category_id' => 1,
            'title' => 'my Html and color page',
            'excerpt' => 'welcom in excerpt html color page in my home',
            'body' => 'su hg hrigh iurhagiurhiugheriughiruhgiurwhgiuhiuew ',
            'slug' => 'my-hc-page',

        ]);
        return "<script> alert(\"success to inserting\"); </script>";
    }
);
