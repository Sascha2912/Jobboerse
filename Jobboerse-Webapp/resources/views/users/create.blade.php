@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registieren</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">

                <label for="first_name">Vorname</label>
                <input type="text" class="form-control" id="first_name" name="first_name">

                <label for="last_name">Nachname</label>
                <input type="text" class="form-control" id="last_name" name="last_name">

                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email">


                <label for="password">Passwort</label>
                <input type="text" class="form-control" id="password" name="password">

                <label for="role">Rolle</label>
                <input type="text" class="form-control" id="role" name="role">

            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </div>
@endsection
