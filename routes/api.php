<?php

use App\Http\Controllers\PostApiController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::get('/posts',[PostApiController::class,index]);
Route::resource('posts', PostApiController::class);
/*

Route::post('/posts',function ()
{
    request()->validate([
        'title'=>'required',
        'content'=>'required',
                        ]);
    return Post::create([
        'title'=>request('title'),
        'content'=>request('content'),
                        ]);
});
*/
/*
Route::put('/posts/{id}',function ($id){
    $post=Post::findOrFail($id);

});
*/
/*
Route::put('/posts/{post}',function (Post $post){
   $post->update([
                     'title'=>request('title'),
                     'content'=>request('content'),
                 ]);
    });

Route::delete('/posts/{post}',function (Post $post){
    $success =$post->delete();
    return ['success' => $success];
});
*/
