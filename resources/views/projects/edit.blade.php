<!-- resources/views/projects/edit.blade.php -->

@extends('layout')

@section('title', 'Edit Project')

@section('content')
<h1>Edit Project</h1>
<form action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    @include('projects._form')
</form>
@endsection