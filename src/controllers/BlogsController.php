<?php

namespace app\controllers;

use app\interfaces\IBlogsMapper;

class BlogsController extends Controller
{
    protected IBlogsMapper $blogsMapper;

    /**
     * @return IBlogsMapper
     */
    public function getBlogsMapper(): IBlogsMapper
    {
        return $this->blogsMapper;
    }

    /**
     * @param IBlogsMapper $blogsMapper
     */
    public function setBlogsMapper(IBlogsMapper $blogsMapper): void
    {
        $this->blogsMapper = $blogsMapper;
    }

    public function index(): void
    {
        var_dump("Hello WOrld");
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
        //
    }
}