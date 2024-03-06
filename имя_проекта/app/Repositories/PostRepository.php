<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::all();
    }

    public function create(array $data, $userId)
    {
        $data['user_id'] = $userId;
        return Post::create($data);
    }

    public function find($id)
    {
        return Post::find($id);
    }

}
