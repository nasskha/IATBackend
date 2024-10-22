@extends('layouts.app')

@section('title', 'Huisdier Bewerken')

@section('content')
    <h2>Bewerken: {{ $pet->name }}</h2>
    <form action="{{ route('pets.update', $pet->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Naam:</label>
        <input type="text" name="name" value="{{ $pet->name }}" required>

        <label for="animal_type">Dier Type:</label>
        <input type="text" name="animal_type" value="{{ $pet->animal_type }}" required>

        <label for="profile_picture">Foto:</label>
        <input type="file" name="profile_picture" accept="image/*">

        <label for="hourly_price">Uurtarief:</label>
        <input type="number" name="hourly_price" value="{{ $pet->hourly_price }}" step="0.01" required>

        <button type="submit">Bijwerken</button>
    </form>
@endsection
