@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unternehmen</h1>
        <a href="{{ route('companies.create') }}" class="btn btn-primary mb-3">Neues Unternehmen erstellen</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->name }}</td>
                    <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-sm btn-info">Anzeigen</a>
                        <a href="{{ route('$companies.edit', $company->id) }}" class="btn btn-sm btn-primary">Bearbeiten</a>
                        <form action="{{ route('$companies.destroy', $company->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie diese Kategorie löschen möchten?')">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
