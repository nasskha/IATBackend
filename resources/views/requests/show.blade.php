@extends('layouts.app')

@section('title', 'Aanvraag Details')

@section('content')
    <h2>Aanvraag voor: {{ $request->pet->name }}</h2>
    <p>Status: {{ $request->status }}</p>
    <p>Opmerkingen: {{ $request->comments }}</p>
@endsection
