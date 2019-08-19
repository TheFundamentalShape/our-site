@extends('layouts.app')

@section('title')
    {{ $property->name }}
@endsection

@section('content')
    <div class="md:flex">
        <div class="mx-6 mt-6 mr-20">
            <dashboard-sidebar></dashboard-sidebar>
        </div>
        <div class="mx-6 mt-6 mr-20">
            <h1>{{ $property->name }}</h1>
            <p>{{ $property->domain }}</p>
        </div>
    </div>
@endsection