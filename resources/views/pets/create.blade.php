@extends('layouts.app')

@section('title', 'Huisdier Toevoegen')

@section('content')
    <h2>Voeg een nieuw huisdier toe</h2>
    <form action="{{ route('pets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Naam:</label>
        <input type="text" name="name" required>

        <label for="animal_type">Dier Type:</label>
        <input type="text" name="animal_type" required>

        <label for="profile_picture">Foto:</label>
        <input type="file" name="profile_picture" accept="image/*">

        <label for="hourly_price">Uurtarief:</label>
        <input type="number" name="hourly_price" step="0.01" required>

        <button type="submit">Toevoegen</button>
    </form>
@endsection
