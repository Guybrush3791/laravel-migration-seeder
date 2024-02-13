@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Pizze: {{ count($pizzas) }}</h1>
    <ul>
        @foreach ($pizzas as $pizza)
            <li>
                {{ $pizza -> name }} - {{ $pizza -> price }}euro
            </li>
        @endforeach
    </ul>
@endsection
