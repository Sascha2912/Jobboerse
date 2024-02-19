@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerben</h1>
        <form action="{{ route('job_users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Abschicken</button>
        </form>
    </div>
@endsection
