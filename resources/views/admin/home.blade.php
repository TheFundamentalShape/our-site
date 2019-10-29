@extends('layouts.admin')

@section('title')
    Admin Dashboard
@endsection

@section('content')
    @foreach(\App\Property::all() as $property)
        <a>
            <div class="bg-white rounded p-4 shadow my-4 hover:shadow-xl">
                <h1 class="font-bold font-lg">{{ $property->name }}</h1>
                <p>{{ $property->domain }}</p>
            </div>
        </a>
    @endforeach
@endsection