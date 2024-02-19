@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Jobs</h1>
        <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">Neuen Job erstellen</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Bescgreibung</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->id}}</td>
                    <td>{{ $job->title}}</td>
                    <td>{{ $job->description}}</td>

                    <td>
                        <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-sm btn-info">Anzeigen</a>
                        <a href="{{ route('$jobs.edit', $job->id) }}" class="btn btn-sm btn-primary">Bearbeiten</a>
                        <form action="{{ route('$jobs.destroy', $job->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sind Sie sicher, dass Sie diesen Job löschen möchten?')">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
