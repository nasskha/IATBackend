@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h2>Welkom op het Admin Dashboard</h2>
    <p>Hier kun je gebruikers en aanvragen beheren.</p>
    <a href="{{ route('users.index') }}">Beheer Gebruikers</a>
@endsection
