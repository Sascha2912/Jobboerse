@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Unternehmen löschen</h1>
        <p>Sind Sie sicher, dass Sie dieses Unternehmen "{{ $company->name }}" löschen möchten?</p>
        <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Löschen</button>
        </form>
    </div>
@endsection
