@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Jobs bearbeiten</h1>
        <form action="{{ route('jobs.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">

                <label for="title">Jobtitel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}">

                <label for="description">Beschreibung</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $job->description }}">

                <label for="salary">Gehalt</label>
                <input type="text" class="form-control" id="salary" name="salary" value="{{ $job->salary }}">


                <label for="category">Kategorie</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $job->category_id }}">

                <label for="company">Unternehmen</label>
                <input type="text" class="form-control" id="company" name="company" value="{{ $job->company_id }}">

            </div>
            <button type="submit" class="btn btn-primary">Aktualisieren</button>
        </form>
    </div>
@endsection
