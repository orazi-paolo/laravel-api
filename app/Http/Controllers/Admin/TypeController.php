<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAndUpdateTypeRequest;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = new Type();
        return view('admin.types.create', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAndUpdateTypeRequest $request)
    {
        $data = $request->validated();
        Type::create($data);
        return redirect()->route('admin.types.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAndUpdateTypeRequest $request, Type $type)
    {

        $data = $request->validated();
        $type->update($data);
        return redirect()->route('admin.types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index');
    }
}