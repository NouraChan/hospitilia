<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interface\IPostRepository;
use App\DTO\PostDTO;
use App\Http\Requests\CreatePost;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    protected $postRepository;

    public function __construct(IPostRepository $postRepository){
        $this->postRepository = $postRepository;
    }
    public function create(CreatePost $createPost){

        $postDTO = PostDTO::from($createPost->all());
        $post = $this->postRepository->createpost($postDTO);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
