@extends('layouts.app')

@section('title', 'Alle Gebruikers')

@section('content')
    <h2>Alle Gebruikers</h2>
    <ul>
        @foreach ($users as $user)
            <li>
                <a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
