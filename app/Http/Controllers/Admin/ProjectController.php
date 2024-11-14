<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\Project;
use App\Models\Technology;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAndUpdateProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project = new Project();
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.create', compact('project', 'types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAndUpdateProjectRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image_url')) {
            $filePath = Storage::disk('public')->put("images/projects/", $request->image_url);
            $validatedData['image_url'] = $filePath;
        }
        $project = Project::create($validatedData);
        $project->technologies()->sync($validatedData['technologies']);
        return redirect()->route('admin.projects.show', $project->id );
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAndUpdateProjectRequest $request, Project $project)
    {
        $validatedData = $request->validated();
        if($request->hasFile('image_url')){
            if($project->image_url){
                Storage::delete($project->image_url);
            }
            $filePath = Storage::disk('public')->put("images/projects/", $request->image_url); // url immagine caricata
            $validatedData['image_url'] = $filePath;
        }
        $project->update($validatedData);
        $project->technologies()->sync($validatedData['technologies']);
        return redirect()->route('admin.projects.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->technologies()->detach();
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}