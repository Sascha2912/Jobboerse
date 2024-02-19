@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil</h1>
        <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Registieren</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">Anzeigen</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Bearbeiten</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie Ihr Profil löschen möchten?')">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
