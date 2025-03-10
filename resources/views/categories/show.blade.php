@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategorie anzeigen</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $category->id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Name: {{ $category->name }}</h6>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Bearbeiten</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie diese Kategorie löschen möchten?')">Löschen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
