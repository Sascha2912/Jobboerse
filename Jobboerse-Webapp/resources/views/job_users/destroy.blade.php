@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerbung zurückziehen</h1>
        <p>Sind Sie sicher, dass Sie diese Bewerbung "{{ $job_User->name }}" zurückziehen möchten?</p>
        <form action="{{ route('job_users.destroy', $job_User->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Zurückziehen</button>
        </form>
    </div>
@endsection
