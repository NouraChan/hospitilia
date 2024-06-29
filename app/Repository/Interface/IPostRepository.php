<?php

namespace App\Repository\Interface;
use App\DTO\PostDTO;


interface IPostRepository {

    public function createPost(PostDTO $postDTO): bool;

}

