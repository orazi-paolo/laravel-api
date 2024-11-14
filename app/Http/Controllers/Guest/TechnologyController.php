<?php

namespace App\Http\Controllers\Guest;

use App\Models\Technology;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return view('guest.technologies.index', compact('technologies'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view('guest.technologies.show', compact('technology'));
    }
}