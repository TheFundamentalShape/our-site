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
                <a class="inline-block bg-cool-green rounded shadow px-3 py-2 mt-2 font-semibold text-white border-2 border-transparent hover:border-cool-green hover:text-cool-green hover:bg-white">Visit your Slack workspace</a>
            </div>

            <div class="my-6 md:flex">
                <div class="bg-white rounded shadow w-full max-w-6xl mr-4 my-4 md:my-0">
                    <div class="bg-gray-800 p-4 rounded-t">
                        <h3 class="text-2xl text-white">Your sites</h3>
                    </div>

                    <div class="p-4 flex justify-between border-b-2 border-gray-200">
                        <p class="font-bold text-lg">The Fundamental Shape</p>
                        <p class="text-gray-500">fundamentalshape.com</p>
                    </div>

                    <div class="p-4 flex justify-between">
                        <p class="font-bold text-lg">Support Site</p>
                        <p class="text-gray-500">help.fundamentalshape.com</p>
                    </div>
                </div>

                <div class="bg-white rounded shadow w-full my-4 md:my-0 md:max-w-xs">
                    <div class="bg-gray-800 p-4 rounded-t">
                        <h3 class="text-2xl text-white">Your balance</h3>
                    </div>

                    <div class="p-4 flex justify-between">
                        <p class="text-6xl text-center"><span class="text-gray-500 text-4xl pr-2">$</span>{{ $property->getTotalBalanceFormatted() }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
