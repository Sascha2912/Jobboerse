@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerbung anzeigen</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $job_User->id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Name: {{ $job_User->name }}</h6>
                <a href="{{ route('job_users.edit', $job_User->id) }}" class="btn btn-primary">Bearbeiten</a>
                <form action="{{ route('job_users.destroy', $job_User->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie Ihre Bewerbung zurückziehen möchten?')">Löschen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
