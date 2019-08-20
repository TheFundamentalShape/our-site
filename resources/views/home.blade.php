@extends('layouts.app')

@section('title')
    Your properties
@endsection

@section('content')
    <div class="mx-8 my-8">
        <div class="my-4">
            <h2 class="text-lg font-bold">Hi there, {{  Auth::user()->name }}.</h2>
            <p>Here are your registered properties. Please select one to continue, or create a new one.</p>
        </div>

        @foreach($properties as $property)
            <a href="{{ route('property.show', $property->id) }}">
                <div class="rounded bg-white shadow-md p-4 my-4 hover:shadow-2xl">
                    <h2 class="text-md font-bold">{{ $property->name }}</h2>
                    <p>{{ $property->domain }}</p>
                </div>
            </a>
        @endforeach

        <new-property-form csrf-token="{{ csrf_token() }}" errors="{{ json_encode($errors->all()) }}"></new-property-form>

    </div>
@endsection
