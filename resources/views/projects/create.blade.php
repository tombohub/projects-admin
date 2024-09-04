<!-- resources/views/projects/create.blade.php -->

@extends('layout')

@section('title', 'Create Project')

@section('content')
<h1>Create Project</h1>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    @include('projects._form')
</form>
@endsection