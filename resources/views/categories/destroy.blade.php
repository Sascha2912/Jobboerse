@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Kategorie löschen</h1>
        <p>Sind Sie sicher, dass Sie die Kategorie "{{ $category->name }}" löschen möchten?</p>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Löschen</button>
        </form>
    </div>
@endsection
