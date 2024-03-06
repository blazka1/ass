<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = $this->postRepository->create($request->all(), $request->user()->id);
        return response()->json($post, 201);
    }

}
