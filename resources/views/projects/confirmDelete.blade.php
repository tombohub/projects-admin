@extends('layout')

@section('title', 'Confirm delete')

@section('content')

<div class="card">
    <div class="card-body text-center">
        <h5>Confirm delete</h5>
        <p class="card-text">
            Are you sure you want to delete {{$project->name}} project?
        </p>
        <div class="vstack gap-2">
            <a class="btn btn-outline-secondary" href="{{url()->previous()}}">Cancel</a>
            <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger w-100" type="submit">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection