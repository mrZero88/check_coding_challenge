<?php

namespace app\controllers;

use app\interfaces\ICommentsMapper;

class CommentsController extends Controller
{
    protected ICommentsMapper $commentsMapper;

    /**
     * @return ICommentsMapper
     */
    public function getCommentsMapper(): ICommentsMapper
    {
        return $this->commentsMapper;
    }

    /**
     * @param ICommentsMapper $commentsMapper
     */
    public function setCommentsMapper(ICommentsMapper $commentsMapper): void
    {
        $this->commentsMapper = $commentsMapper;
    }

    public function index(): void
    {
        var_dump("Welcome to comments index!");
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
        //
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
        var_dump("DESTROY!");
    }
}