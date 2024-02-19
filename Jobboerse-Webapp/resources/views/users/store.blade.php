@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registrieren</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">Vorname</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $job->first_name }}" required>

                <label for="last_name">Nachname</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $job->last_name }}" required>

                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $job->email }}" required>


                <label for="password">Passwort</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $job->password }}" required>

                <label for="role">Rolle</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $job->role }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </div>
@endsection
