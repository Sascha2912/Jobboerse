@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Jobs anzeigen</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $job->id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Name: {{ $job->title }}</h6>
                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary">Bearbeiten</a>
                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie diesen Job löschen möchten?')">Löschen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
