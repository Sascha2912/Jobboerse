@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerbung bearbeiten</h1>
        <form action="{{ route('job:users.update', $job_User->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $job_User->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Aktualisieren</button>
        </form>
    </div>
@endsection
