<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function save(Request $request)
    {
        $fields = $request->validate([
            "name" => "required|string",
            "description" => "required|string",
            "author" => "required|string"
        ]);
        Post::create($fields);
        return back()->with("success", "post successfully");
    }
}
