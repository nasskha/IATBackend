@extends('layouts.app')

@section('title', $pet->name)

@section('content')
    <h2>{{ $pet->name }}</h2>
    <p>Type: {{ $pet->animal_type }}</p>
    <p>Uurtarief: €{{ $pet->hourly_price }}</p>
    <img src="{{ asset('storage/' . $pet->profile_picture) }}" alt="{{ $pet->name }}">
    <a href="{{ route('pets.edit', $pet->id) }}">Bewerken</a>
@endsection
