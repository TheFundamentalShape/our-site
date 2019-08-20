@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="md:flex text-dashboard">
        <div class="px-6 mt-6 pr-20 md:border-0 border-b-2 border-gray-400">
            <div class="text-dashboard text-gray-500 font-semibold text-lg">
                <div class="">
                    <a href="{{ route('property.show', $property->id) }}" class="hover:text-gray-800 {{ (request()->is('properties/' . $property->id)) ? 'link-active' : '' }}"><i class="fas fa-home mr-2"></i> Home</a>
                </div>
                <div class="my-5">
                    <a href="{{ route('billing.show', $property->id) }}" class="hover:text-gray-800 {{ (request()->is('properties/' . $property->id . '/billing')) ? 'link-active' : '' }}"><i class="fas fa-file-invoice-dollar mr-3"></i> Billing</a>
                </div>
                <div class="my-5">
                    <a class="hover:text-gray-800"><i class="fas fa-server mr-2"></i> Your sites</a>
                </div>
                <div class="my-5">
                    <a class="hover:text-gray-800"><i class="fas fa-folder-open mr-2"></i> Shared files</a>
                </div>

                <div class="my-10">
                    <a class="hover:text-gray-800" href="/home">Back to your properties <i class="fas fa-arrow-circle-left"></i></a>
                </div>
            </div>
        </div>
        <div class="mx-6 mt-6 mr-20">
            <div>
                <h1 class="text-md font-bold text-3xl">{{ $property->name }}</h1>
                <p class="text-gray-600 font-medium text-lg">{{ $property->domain }}</p>
                <a class="inline-block bg-cool-green rounded shadow px-3 py-2 mt-2 font-semibold text-white hover:text-cool-green hover:bg-white">Visit your Slack workspace</a>
            </div>

            <div class="my-6 flex justify-between">
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
