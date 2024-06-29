<?php

namespace App\Repository;
use App\Repository\Interface\ IPostRepository;
use App\DTO\PostDTO;
use App\Models\Post;

class PostRepository implements IPostRepository {

    public function createPost(PostDTO $postDTO) : bool
    {
        
        if (Post::create($postDTO->toArray())) {

            return true;
        }
return false;
}}


