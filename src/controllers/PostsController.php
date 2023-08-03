<?php

namespace app\controllers;

use app\interfaces\IPostsMapper;

class PostsController extends Controller
{
    protected IPostsMapper $postsMapper;

    public function index(): void
    {
        echo "index of Posts";
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(): void
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(): void
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show(int $id): void
    {
        echo "show of Posts";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit(int $id): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public function update(int $id): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id): void
    {
        //
    }

    /**
     * @return IPostsMapper
     */
    public function getPostsMapper(): IPostsMapper
    {
        return $this->postsMapper;
    }

    /**
     * @param IPostsMapper $postsMapper
     */
    public function setPostsMapper(IPostsMapper $postsMapper): void
    {
        $this->postsMapper = $postsMapper;
    }
}