@extends('layouts.app')

@section('content')

    <h2>Država: {{ $podaci->COUNTRY_NAME }}</h2>

    <h2>Grad: {{ $podaci->CITY_NAME }}</h2>

@endsection