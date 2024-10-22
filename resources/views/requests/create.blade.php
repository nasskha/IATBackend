@extends('layouts.app')

@section('title', 'Nieuwe Aanvraag')

@section('content')
    <h2>Nieuwe Aanvraag voor: {{ $pet->name }}</h2>
    <form action="{{ route('requests.store') }}" method="POST">
        @csrf
        <input type="hidden" name="pet_id" value="{{ $pet->id }}">
        <label for="comments">Opmerkingen:</label>
        <textarea name="comments" required></textarea>
        <button type="submit">Indienen</button>
    </form>
@endsection
