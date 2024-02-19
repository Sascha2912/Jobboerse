@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Job löschen</h1>
        <p>Sind Sie sicher, dass Sie diesen Job "{{ $job->title }}" löschen möchten?</p>
        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Löschen</button>
        </form>
    </div>
@endsection
