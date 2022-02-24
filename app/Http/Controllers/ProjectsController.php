<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function create()
    {
        return view('projects.create', [
            'projects' => Project::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Project::create($attributes);

        return ['message' => 'Project has been created.'];
    }
}
