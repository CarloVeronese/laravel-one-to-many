@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('admin.projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="project_name" class="form-label">Project Name</label>
            <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Project Name"
                value="{{ old('name', $project->project_name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="description" id="description"
                placeholder="Project Description">{!! old('bio', $project->description) !!}</textarea>
        </div>
        <div class="mb-3">
            <label for="development_type" class="form-label">Type</label>
            <select type="text" class="form-control" name="development_type" id="development_type" placeholder="Project Type">
                <option @selected(old('development_',$project->development_) === 'front-end') value="front-end">Front-End</option>
                <option @selected(old('development_',$project->development_) === 'back-end') value="back-end">Back-End</option>
                <option @selected(old('development_',$project->development_) === 'full-stack') value="full-stack">Full-Stack</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="project_status" class="form-label">Status</label>
            <select type="text" class="form-control" name="project_status" id="project_status" placeholder="Project Status">
                <option @selected(old('project_status',$project->project_status) === 'to start') value="to start">To Start</option>
                <option @selected(old('project_status',$project->project_status) === 'in progress') value="in progress">In Progress</option>
                <option @selected(old('project_status',$project->project_status) === 'completed') value="completed">Completed</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="github_link" class="form-label">Github Link</label>
            <input type="text" class="form-control" name="github_link" id="github_link" placeholder="Project Githubù Link"
                value="{{ old('github_link', $project->github_link) }}" readonly>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-warning" value="Save">
        </div>
    </form>
</div>
@endsection