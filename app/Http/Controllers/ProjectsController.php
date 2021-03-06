<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() 
    {
        $projects = Project::all();
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function show()
    {

    }

    public function store()
    {
        // return request()->all();
        $project = Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('projects');
    }

    public function edit($id) // projects/edit/1
    {
        $project = \App\Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
        $project = Project::findOrFail($id);
        
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        // dd(request()->all());

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('projects');
    }


}
