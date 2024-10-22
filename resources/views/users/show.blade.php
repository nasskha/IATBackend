@extends('layouts.app')

@section('title', $user->name)

@section('content')
    <h2>{{ $user->name }}</h2>
    <p>Email: {{ $user->email }}</p>
    <p>Rol: {{ $user->role }}</p>
@endsection
