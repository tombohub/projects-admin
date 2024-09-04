<!-- resources/views/projects/index.blade.php -->

@extends('layout')

@section('title', 'Projects')

@section('content')
<h1>Projects</h1>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div>
    <a class="btn btn-primary" href="{{ route('projects.create') }}">Add New Project</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Github</th>
            <th scope="col">Website</th>
            <th scope="col">Published?</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row"><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a>
            </th>
            <td>
                <a href="{{$project->github_repo_url}}">github</a>
            </td>
            <td>
                <a href="{{$project->website_url}}">website</a>
            </td>
            <td>
                @if ($project->is_published)

                <i class="bi bi-check-lg"></i>
                @else
                <i class="bi bi-x-lg"></i>
                @endif
            </td>
            <td>
                <a class="btn btn-secondary" href="{{ route('projects.edit', $project->id) }}"><i class="bi bi-pen"></i></a>

                <a class="btn btn-danger" href="{{route('projects.confirmDelete', $project)}}"><i class="bi bi-trash"></i></a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection