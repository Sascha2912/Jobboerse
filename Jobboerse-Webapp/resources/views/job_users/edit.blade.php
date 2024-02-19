@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerbung bearbeiten</h1>
        <form action="{{ route('job_users.update', $job_User->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $job_User->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Aktualisieren</button>
        </form>
    </div>
@endsection
