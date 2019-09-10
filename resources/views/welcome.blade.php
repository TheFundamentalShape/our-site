@extends('layouts.master')

@section('title')
    Welcome home.
@endsection

@section('content')
    <div class="bg-brand-pink">
        <div class="hero bg-cover pb-64">
            <div class="ml-12 lg:ml-32 relative">

                <h1 class="pt-12 text-4xl md:text-6xl text-gray-800 text-brand">We're<br>The Fundamental Shape</h1>
                <h3 class="mt-1 text-2xl md:text-3xl text-gray-800 text-brand">and we build pretty websites.</h3>
                <a href="{{ route('register') }}" class="bg-cool-green inline-block mt-8 px-8 py-4 text-2xl text-white hover:text-cool-green hover:bg-white text-brand rounded shadow-lg">Register your business today!</a>

                <div class="absolute pt-8 lg:pt-0 right-0">
                    <img src="/img/cactus.png">
                </div>
                

            </div>
        </div>
    </div>

    <div class="mt-64 p-10">
        <h2 class="text-brand text-center lg:text-5xl text-3xl px-30 lg:px-56 text-gray-800">We build simple and elegant websites and web apps for startups and small businesses.</h2>
        <p class="lg:px-64 px-12 py-12 lg:text-3xl text-lg text-gray-500 text-paragraph text-center">As a web development company, we understand and we value how important it is to have a stunning internet presence. This means you should have an elegant, responsive, simple, and easy to use website that is chock-full of information that is relevant to your business, and useful to your customers.</p>
        <p class="lg:px-32 font-bold lg:text-4xl text-lg text-gray-500 text-paragraph text-center">We want to build just that, for you.</p>
    </div>

    <div class="mt-20 mx-10 lg:flex lg:justify-between">
        <div class="lg:mx-4">
            <h2 class="text-brand text-center text-3xl lg:text-5xl text-gray-800">The latest and greatest tech, just for you.</h2>
            <p class="py-12 px-12 lg:px-0 text-lg lg:text-4xl text-gray-500 text-paragraph text-center">We use modern technologies to build you the best website possible. We use tools like Laravel, Statamic, and Vue JS to craft the perfect site for you!</p>
        </div>
        <div class="lg:mx-4">
            <h2 class="text-brand text-center text-3xl lg:text-5xl text-gray-800">Reliable hosting for your fancy new design.</h2>
            <p class="py-12 px-12 lg:px-0 text-lg lg:text-4xl text-gray-500 text-paragraph text-center">With such a nice new design, you deserve a nice new web host! That’s why we’ll host your new site for you on a high performance DigitalOcean droplet!</p>
        </div>
    </div>

    <div class="mt-20 p-10 flex justify-center static">
        <div>
            <h2 class="text-brand text-center text-3xl lg:text-5xl text-gray-800 px-16">We’re here for you.
                Every step of the way.</h2>
            <p class="lg:px-32 px-12 py-12 text-lg lg:text-4xl text-gray-500 text-paragraph text-center">We’re here to work for you, start to finish, and beyond. We’ll work with you every step of the way to ensure you’re happy with your design. We’ll even stick around once we’re finished on our end in case you run into problems, or if you need help managing your website.</p>
        </div>
    </div>

    <div class="mt-20 bg-cool-green">
        <div class="hero-2 bg-cover px-12 py-64">
            <h2 class="text-brand text-brand-pink lg:text-center text-6xl text-gray-800">Checkout what we've built.</h2>
        </div>
    </div>

    <div class="mt-20">
        <div class="lg:px-32 lg:flex lg:justify-between">

            <a href="http://accuframe.com" target="_blank">
                <div class="hover:shadow-2xl bg-white rounded-lg shadow mx-12 max-w-6xl mt-8 min-h-full">
                    <img class="rounded-t-lg" src="/img/p1.jpg" alt="">
                    <div class="p-5">
                        <h2 class="text-brand text-3xl text-gray-800 uppercase">AccuFrame.com</h2>
                        <p class="text-paragraph text-gray-500 text-2xl mt-4">AccuFrame® Energy Seal is a new economical innovation designed to help provide a solution to the increased energy efficiency demands required in new home construction.</p>
                    </div>
                </div>
            </a>

            <a href="http://theluigi.com" target="_blank">
                <div class="hover:shadow-2xl bg-white rounded-lg shadow mx-12 max-w-6xl mt-8 min-h-full">
                    <img class="rounded-t-lg" src="/img/p2.png" alt="">
                    <div class="p-5">
                        <h2 class="text-brand text-3xl text-gray-800 uppercase">TheLuigi.com</h2>
                        <p class="text-paragraph text-gray-500 text-2xl mt-4">Luigi is a web developer, located in upstate NY, who started The Fundamental Shape. Checkout his rad website!</p>
                    </div>
                </div>
            </a>

        </div>
    </div>

    <div class="mt-20 mb-24">
        <h3 class="text-center text-brand text-gray-600 text-2xl">Your site could be on here too! 🎉</h3>
    </div>

    <div class="bg-gray-800">
        <div class="p-8 flex justify-center">
            <h1 class="text-brand text-white text-2xl px-3">Existing Customer?</h1>
            <a href="{{ route('login') }}" class="inline-block text-brand bg-brand-pink hover:bg-white hover:text-brand-pink text-white rounded px-8 py-2">Login</a>
        </div>
    </div>

@endsection