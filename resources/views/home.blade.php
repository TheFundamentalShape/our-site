@extends('layouts.app')

@section('title')
    Dashboard | Home
    @endsection

@section('content')
    <div class="mx-8 my-8">
        <div class="my-4">
            <h2 class="text-lg font-bold">Hi there, {{  Auth::user()->name }}.</h2>
            <p>Here are your registered properties. Please select one to continue, or create a new one.</p>
        </div>

        @foreach($properties as $property)
            <a href="">
                <div class="rounded bg-white shadow-md p-4 my-4 hover:shadow-2xl">
                    <h2 class="text-md font-bold">{{ $property->name }}</h2>
                    <p>{{ $property->domain }}</p>
                </div>
            </a>
        @endforeach

        <div class="my-4 flex justify-center">
            <a class="text-dashboard inline-block text-white font-semibold bg-cool-green hover:bg-white hover:text-cool-green px-8 py-2 rounded-lg shadow-md hover:shadow-none">Add a new property</a>
        </div>

    </div>
@endsection
