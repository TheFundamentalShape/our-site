@extends('layouts.property.app')

@section('title')
    Billing
@endsection

@section('content')
    <div class="lg:max-w-6xl">
        <h2 class="text-2xl font-bold my-4">Current Bills</h2>
        @if($property->bills()->count() < 1)
            <div class="bg-cool-green rounded p-4 text-white">
                <h1 class="text-2xl text-dashboard font-bold">Woohoo!</h1>
                <p class="font-light">You have no unpaid bills! What a great feeling!</p>
            </div>
        @endif

        <h2 class="text-2xl font-bold my-8">Past Bills</h2>

        <div class="mb-4">
            <div class="bg-white rounded p-4">
                <div class="flex justify-between">
                    <h1 class="text-2xl">Test Bill</h1>
                    <span class="inline-block bg-cool-green text-white px-3 py-2 rounded-full">$97.00</span>
                </div>

                <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="mb-4">
            <div class="bg-white rounded p-4">
                <div class="flex justify-between">
                    <h1 class="text-2xl">Test Bill</h1>
                    <span class="inline-block bg-cool-green text-white px-3 py-2 rounded-full">$97.00</span>
                </div>

                <p class="text-gray-600 mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>

@endsection
