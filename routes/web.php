<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
// Route::get('post', function () {
//     return view('posts/post');
// });


Route::controller(PostController::class)->group(function() {
    Route::get("post/create", "create")->name("post.create");
    Route::post("post/insert", "insert")->name("post.insert");
    Route::get("post/index", "index")->name("posts");
    Route::get("post/edit/{id}", "edit")->name("post.edit");
    // this is to make update route by put, but if you want use this case you should run this code inside form (@method("put"));
    Route::put("post/update/{id}", "update")->name("post.update");
    Route::get("post/delete/{id}", "delete")->name("post.delete");
    Route::get("posts/delete/all/truncate", "deleteAllByTruncate")->name("post.delete.all.truncate");
});

