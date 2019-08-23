@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="md:flex text-dashboard">
        @include('layouts.sidebar')
        <div class="px-6 mt-6 w-full">
            <div>
                <h1 class="text-md font-bold text-3xl">{{ $property->name }}</h1>
                <p class="text-gray-600 font-medium text-lg">{{ $property->domain }}</p>
                <a class="inline-block bg-cool-green rounded shadow px-3 py-2 mt-2 font-semibold text-white hover:text-cool-green hover:bg-white">Visit your Slack workspace</a>
            </div>

            <div class="my-6 flex justify-between mx-auto">
                <div class="bg-white rounded shadow p-4 px-16 mr-4">
                    <p class="text-6xl">4</p>
                    <p class="text-gray-500">Sites</p>
                </div>

                <div class="bg-white rounded shadow p-4 px-16 mx-4">
                    <p class="text-6xl text-center"><span class="text-gray-500 text-4xl pr-2">$</span>97</p>
                    <p class="text-gray-500">Account balance</p>
                </div>
            </div>
        </div>
    </div>
@endsection
