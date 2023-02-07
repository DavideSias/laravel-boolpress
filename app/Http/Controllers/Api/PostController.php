<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::where('id', $post->id )->with(['category', 'tags'])->first();

        return response()->json([
            'success' => true,
            'results' => $post
        ]);
    }

    public function random() {
        $post = Post::inRandomOrder()->limit(9)->get();
        return response()->json([
            'success' => true,
            'results' => $post
        ]);
    }
}
