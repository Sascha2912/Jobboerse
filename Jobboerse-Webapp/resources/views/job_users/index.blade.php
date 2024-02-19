@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerben</h1>
        <a href="{{ route('job_users.create') }}" class="btn btn-primary mb-3">Bewerben</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Anschreiben</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($job_users as $job_User)
                <tr>
                    <td>{{ $job_User->id }}</td>
                    <td>{{ $job_User->name }}</td>
                    <td>
                        <a href="{{ route('job_users.show', $job_User->id) }}" class="btn btn-sm btn-info">Anzeigen</a>
                        <a href="{{ route('$job_users.edit', $job_User->id) }}" class="btn btn-sm btn-primary">Bearbeiten</a>
                        <form action="{{ route('$job_users.destroy', $job_User->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie Ihre Bewerbung zurückziehen möchten?')">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
