@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil bearbeiten</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">Vorname</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $job->first_name }}">

                <label for="last_name">Nachname</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $job->last_name }}">

                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $job->email }}" required>


                <label for="password">Passwort</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $job->password }}" required>

                <label for="role">Rolle</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $job->role }}">
            </div>
            <button type="submit" class="btn btn-primary">Aktualisieren</button>
        </form>
    </div>
@endsection
