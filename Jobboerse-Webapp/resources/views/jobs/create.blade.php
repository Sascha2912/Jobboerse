@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Neuen Job erstellen</h1>
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="form-group">

                <label for="title">Jobtitel</label>
                <input type="text" class="form-control" id="title" name="title">

                <label for="description">Beschreibung</label>
                <input type="text" class="form-control" id="description" name="description">

                <label for="salary">Gehalt</label>
                <input type="text" class="form-control" id="salary" name="salary">


                <label for="category">Kategorie</label>
                <input type="text" class="form-control" id="category" name="category">

                <label for="company">Unternehmen</label>
                <input type="text" class="form-control" id="company" name="company">

            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </div>
@endsection
