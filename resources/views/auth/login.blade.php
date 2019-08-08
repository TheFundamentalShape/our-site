@extends('layouts.master')

@section('title')
    Welcome back, please login.
@endsection

@section('content')
    <div class="lg:pl-40 pl-12">
        <h1 class="pt-20 text-5xl lg:text-6xl text-brand text-gray-800">Welcome back.</h1>
        <p class="text-paragraph text-gray-500 font-bold">Please sign in.</p>

        <div class="pt-8 pr-8">
            <label class="text-paragraph text-gray-800 font-bold">
                What's your email address?
            </label>
            <input type="email" name="email" placeholder="hi@fundamentalshape.com" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
        </div>

        <div class="pt-8 pr-8">
            <label class="text-paragraph text-gray-800 font-bold">
                What's your account password?
            </label>
            <input type="email" name="email" placeholder="**********" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
        </div>

        <div class="pt-8 pr-8">
            <button type="submit" class="text-brand text-lg px-4 py-3 bg-brand-pink text-white hover:bg-white hover:text-brand-pink rounded shadow-md">Sign in</button> <a href="{{ route('password.request') }}" class="inline-block px-6 text-paragraph hover:underline font-bold text-gray-500">Forgot your password?</a>
        </div>

    </div>

@endsection
