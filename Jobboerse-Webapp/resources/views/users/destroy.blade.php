@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Profil löschen</h1>
        <p>Sind Sie sicher, dass Sie Ihr Profil "{{ $user->name }}" löschen möchten?</p>
        <form action="{{ route('companies.destroy', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Löschen</button>
        </form>
    </div>
@endsection
