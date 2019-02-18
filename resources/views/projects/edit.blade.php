@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 1em;">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        
        <div class="field">
            <label for="label">Title</label>

            <div class="control">
            <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
                <label for="label">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea" id="" cols="30" rows="10">{{ $project->description }}</textarea>
                </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>        
    </form>

    <form method="POST" action="/projects/{{ $project->id }}" >
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>                
    </form>
@endsection