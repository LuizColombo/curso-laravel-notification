<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index(Post $post)
    {
        $posts = $this->post->with('comments')->paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = $this->post->with(['comments.user', 'user'])->find($id);

        return view('posts.show', compact('post'));
    }
}
