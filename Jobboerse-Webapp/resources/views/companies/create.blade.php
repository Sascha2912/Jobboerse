@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Neues Unternehmen erstellen</h1>
        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </div>
@endsection
