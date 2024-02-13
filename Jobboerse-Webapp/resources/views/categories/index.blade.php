@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategorien</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Neue Kategorie erstellen</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info">Anzeigen</a>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Bearbeiten</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
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
