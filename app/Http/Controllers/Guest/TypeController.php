<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('guest.types.index', compact('types'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('guest.types.show', compact('type'));
    }

}