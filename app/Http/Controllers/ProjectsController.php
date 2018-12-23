<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() 
    {
        $projects = \App\Project::all();
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // return request()->all();
    
        $project = new \App\Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('projects');
    }
}
