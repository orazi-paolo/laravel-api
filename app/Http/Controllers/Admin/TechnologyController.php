<?php

namespace App\Http\Controllers\Admin;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAndUpdateTechnologyRequest;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // prendo tutte le tecnologie
        $technologies = Technology::all();
        return view('admin.technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $technology = new Technology();
        return view('admin.technologies.create', compact('technology'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAndUpdateTechnologyRequest $request)
    {
        $validateData = $request->validated();
        $technology = Technology::create($validateData);
        return redirect()->route('admin.technologies.index', compact('technology'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view('admin.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAndUpdateTechnologyRequest $request, Technology $technology)
    {
        $validateData = $request->validated();
        $technology->update($validateData);
        return redirect()->route('admin.technologies.index', compact('technology'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('admin.technologies.index', compact('technology'));
    }
}