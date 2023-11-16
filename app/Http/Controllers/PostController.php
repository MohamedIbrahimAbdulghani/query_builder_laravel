<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table("posts")->get();
        return view("posts.index", compact("posts"));
    }
    public function create() {
        return view("posts.create");
    }
    public function insert(Request $my_request) {
        DB::table("posts")->insert([
            "title"=>$my_request->title,
            "body"=>$my_request->body
        ]);
        return view("posts.create");
    }
    public function edit($id) {
        $post = DB::table("posts")->where("id", $id)->first();
        return view("posts.edit", compact("post"));
    }
    public function update(Request $my_request, $id) {
        DB::table("posts")->where("id", $id)->update([
            "title"=>$my_request->title,
            "body"=>$my_request->body
        ]);
        return redirect()->route("posts");
    }
    public function delete($id) {
        DB::table("posts")->where("id", $id)->delete();
        return redirect()->route("posts");
    }
    public function deleteAll() {
        DB::table("posts")->delete();
        return redirect()->route("posts");
    }
    // this function to delete all data from database but the id is counter from 0
    public function deleteAllByTruncate() {
        DB::table("posts")->truncate();
        return redirect()->route("posts");
    }
}
