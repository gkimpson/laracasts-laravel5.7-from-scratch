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

    public function edit($id) // projects/edit/1
    {
        $project = \App\Project::find($id);
        return view('projects.edit', compact('project'));
    }

    public function update()
    {
        $project = Project::find($id);
        $project->title = request('title');
        $project->description = request('description');
        // dd(request()->all());
    }

    public function destroy()
    {

    }


}
