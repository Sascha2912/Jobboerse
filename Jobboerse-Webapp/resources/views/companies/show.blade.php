@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unternehmen anzeigen</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $company->id }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Name: {{ $company->name }}</h6>
                <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Bearbeiten</a>
                <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie dieses Unternehmen löschen möchten?')">Löschen</button>
                </form>
            </div>
        </div>
    </div>
@endsection
