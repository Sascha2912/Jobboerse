@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Neuen Job erstellen</h1>
        <form action="{{ route('jobs.store') }}" method="POST">
            @csrf
            <div class="form-group">

                <label for="title">Jobtitel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" required>

                <label for="description">Beschreibung</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $job->description }}" required>

                <label for="salary">Gehalt</label>
                <input type="text" class="form-control" id="salary" name="salary" value="{{ $job->salary }}" required>


                <label for="category">Kategorie</label>
                <input type="text" class="form-control" id="category" name="category" value="{{ $job->category_id }}" required>

                <label for="company">Unternehmen</label>
                <input type="text" class="form-control" id="company" name="company" value="{{ $job->company_id }}" required>

            </div>
            <button type="submit" class="btn btn-primary">Speichern</button>
        </form>
    </div>
@endsection
