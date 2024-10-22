<!-- @extends('layouts.app')

@section('title', 'Alle Huisdieren')

@section('content')
    <h2>Alle Huisdieren</h2>
    <a href="{{ route('pets.create') }}">Voeg een nieuw huisdier toe</a>
    <ul>
        @foreach ($pets as $pet)
            <li>
                <a href="{{ route('pets.show', $pet->id) }}">{{ $pet->name }}</a>
                - {{ $pet->animal_type }}
                <a href="{{ route('pets.edit', $pet->id) }}">Bewerken</a>
                <form action="{{ route('pets.destroy', $pet->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Verwijderen</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection -->
@extends('layouts.app')

@section('content')
    <h1>Lijst van huisdieren</h1>
    <ul>
        @foreach($pets as $pet)
            <li>{{ $pet->name }} ({{ $pet->animal_type }})</li>
        @endforeach
    </ul>
@endsection
