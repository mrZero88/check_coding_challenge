<?php

namespace app\controllers;

abstract class Controller
{
    public abstract function index(): void;

    /**
     * Show the form for creating a new resource.
     *
     */
    public abstract function create(): void;

    /**
     * Store a newly created resource in storage.
     *
     */
    public abstract function store(): void;

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public abstract function show(int $id): void;

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public abstract function edit(int $id): void;

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     */
    public abstract function update(int $id): void;

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public abstract function destroy(int $id): void;
}