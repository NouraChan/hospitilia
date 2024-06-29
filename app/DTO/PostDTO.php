<?php

namespace App\DTO;

use Spatie\LaravelData\Data;

class PostDTO extends Data
{

    public function __construct(
        public string $title,
        public string $description,
        public string $content,
    ) {

    }

}

