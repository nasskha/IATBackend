@extends('layouts.app')

@section('title', 'Alle Aanvragen')

@section('content')
    <h2>Alle Aanvragen</h2>
    <ul>
        @foreach ($requests as $request)
            <li>
                {{ $request->pet->name }} - {{ $request->status }}
                <a href="{{ route('requests.show', $request->id) }}">Bekijk</a>
            </li>
        @endforeach
    </ul>
@endsection
