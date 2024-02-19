@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil bearbeiten</h1>
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">Vorname</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $user->first_name }}">

                <label for="last_name">Nachname</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}">

                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">


                <label for="password">Passwort</label>
                <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">

                <label for="role">Rolle</label>
                <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}">
            </div>
            <button type="submit" class="btn btn-primary">Aktualisieren</button>
        </form>
    </div>
@endsection
