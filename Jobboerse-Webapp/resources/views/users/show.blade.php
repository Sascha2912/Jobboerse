@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil anzeigen</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $user->id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Name: {{ $user->first_name }} {{ $user->last_name }}</h6>
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Bearbeiten</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie Ihr Profil löschen möchten?')">Löschen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
