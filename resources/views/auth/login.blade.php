@extends('layouts.master')

@section('title')
    Welcome back, please login.
@endsection

@section('content')

    <div class="lg:px-56 px-12">

        <form action="/login" method="post">

            @csrf

            @if ($errors->any())
                <div class="bg-red-600 p-8 mt-20 mr-8 rounded shadow-2xl">
                    <div class="lg:flex">
                        <div class="lg:mr-8 lg:mb-0 mb-8">
                            <img class="rounded" src="/img/uhyeah.gif" alt="Wrong.">
                        </div>
                        <div>
                            <h1 class="text-brand text-white text-4xl">Uh, yeah. That's just not right. 🤔</h1>
                            <p class="text-white text-lg text-paragraph">A couple of things just went wonky behing the scenes. Here's what's up:</p>
                            <ul class="pt-6 pl-8">
                                @foreach ($errors->all() as $error)
                                    <li class="text-white text-paragraph text-md">- {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <h1 class="pt-20 text-5xl lg:text-6xl text-brand text-gray-800">Welcome back.</h1>
            <p class="text-paragraph text-gray-500 font-bold">Please sign in.</p>

            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What's your email address?
                </label>
                <input type="email" name="email" placeholder="dwight@schrute-farms.org" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>

            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What's your account password?
                </label>
                <input type="password" name="password" placeholder="**********" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>

            <div class="pt-8 pr-8">
                <button type="submit" class="text-brand text-lg px-4 py-3 bg-brand-pink text-white hover:bg-white hover:text-brand-pink rounded shadow-md">Sign in</button>
                @if(false)
                    <a href="{{ route('password.request') }}" class="inline-block px-6 text-paragraph hover:underline font-bold text-gray-500">Forgot your password?</a>
                @endif
            </div>

        </form>

    </div>

@endsection
