@extends('layouts.property.app')

@section('title')
    Billing
@endsection

@section('content')
    <div class="lg:max-w-6xl">
        <h2 class="text-2xl font-bold my-4">Current Bills</h2>
        @if($property->bills()->unpaid()->count() < 1)
            <div class="bg-cool-green rounded p-4 text-white">
                <h1 class="text-2xl text-dashboard font-bold">Woohoo!</h1>
                <p class="font-light">You have no unpaid bills! What a great feeling!</p>
            </div>
        @else
            @foreach($property->getUnpaidBills() as $bill)
                <div class="mb-8">
                    <div class="bg-white rounded p-4">
                        <div class="flex justify-between">
                            <h1 class="text-2xl">{{ $bill->title }}</h1>
                            <span class="inline-block bg-cool-green text-white px-3 py-2 rounded-full">${{ $bill->getBillPriceFormatted() }}</span>
                        </div>

                        <p class="text-gray-600 mt-4">{{ $bill->description }}</p>
                    </div>
                </div>
            @endforeach

            <p class="font-semibold">Your current total balance is</p>
            <p class="text-2xl">${{ $property->getTotalBalanceFormatted() }}</p>
        @endif

        @if($property->bills()->paid()->count() > 0)
            <h2 class="text-2xl font-bold my-4">Past Bills</h2>

            @foreach($property->bills()->paid()->get() as $bill)
                <div class="mb-8">
                    <div class="bg-white rounded p-4">
                        <div class="flex justify-between">
                            <h1 class="text-2xl">{{ $bill->title }}</h1>
                            <span class="inline-block bg-cool-green text-white px-3 py-2 rounded-full">${{ $bill->getBillPriceFormatted() }}</span>
                        </div>

                        <p class="text-gray-600 mt-4">{{ $bill->description }}</p>
                        <p class="paid-banner ml-48 text-6xl absolute -mt-20">PAID</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

@endsection
