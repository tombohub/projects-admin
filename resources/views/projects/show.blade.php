<!-- resources/views/projects/show.blade.php -->

@extends('layout')

@section('title', 'Project Details')

@section('content')
<p>{{ $project->name }}</p>
<a href="{{$project->github_repo_url}}">github</a>
<a href="{{$project->website_url}}">website</a>
<a href="{{ route('projects.index') }}">Back to Projects</a>
@endsection