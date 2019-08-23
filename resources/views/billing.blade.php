@extends('layouts.app')

@section('title')
    Billing
@endsection

@section('content')
    <div class="md:flex text-dashboard">

        @include('layouts.sidebar')

        <div class="mt-6 w-full px-4">
            <div>
                <h1 class="text-md font-bold text-3xl">{{ $property->name }}</h1>
                <p class="text-gray-600 font-medium text-lg">{{ $property->domain }}</p>
                <a class="inline-block bg-cool-green rounded shadow px-3 py-2 mt-2 font-semibold text-white hover:text-cool-green hover:bg-white">Visit your Slack workspace</a>
            </div>

            <div class="my-6">
                <h2 class="font-normal text-4xl my-4">Here are the invoices for this property.</h2>

                <div class="bg-white shadow rounded p-4 my-4">
                    <div class="flex justify-between">
                        <div>
                            <h1 class="text-3xl">Add blogging platform</h1>
                            <p>Bill sent 8/19/2019</p><span class="mt-2 inline-block bg-cool-green rounded-full text-white px-3 py-1 font-medium">Complete</span>
                        </div>

                        <div>
                            <h1>$97.00</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-6">
                <h2 class="font-normal text-2xl my-1">Your total owed:</h2>
                <h1 class="font-normal text-4xl my-1">$97.00</h1>
            </div>

        </div>
    </div>
@endsection
