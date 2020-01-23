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

                <div class="absolute pt-8 lg:pt-0 right-0">
                    <img src="/img/cactus.png">
                </div>
                

            </div>
        </div>
    </div>

    <div class="max-w-sm md:max-w-xl lg:max-w-4xl mx-auto mt-56">

        <div>
            <h2 class="text-brand text-center text-5xl text-gray-800">We help you stand out.</h2>
            <p class="lg:text-2xl text-lg text-gray-600 text-paragraph text-center">As of January 2020 there are over <b>1.74 billion</b> active websites on the Internet. That's a lot. It's increasingly easier to fade into the vast depths of the interwebs and become just another boring old website. A memorable website is essential for any successful business.</p>
        </div>

        <div class="md:mt-16 md:flex justify-between">
            <div class="md:mx-4 mt-16 md:mt-0">
                <h2 class="text-brand text-center text-3xl lg:text-5xl text-gray-800">The latest and greatest tech, just for you.</h2>
                <p class="text-lg lg:text-2xl text-gray-600 text-paragraph text-center">We use modern technologies to build you the best website possible. We use tools like Laravel, Statamic, and Vue JS to craft the perfect site for you!</p>
            </div>
            <div class="md:mx-4 mt-16 md:mt-0">
                <h2 class="text-brand text-center text-3xl lg:text-5xl text-gray-800">Reliable hosting for your fancy new design.</h2>
                <p class="text-lg lg:text-2xl text-gray-600 text-paragraph text-center">With such a nice new design, you deserve a nice new web host! That’s why we’ll host your new site for you on a high performance DigitalOcean droplet!</p>
            </div>
        </div>

        <div class="mt-16">
            <h2 class="text-brand text-center text-3xl lg:text-5xl text-gray-800">We’re here for you. Every step of the way.</h2>
            <p class="text-lg lg:text-2xl text-gray-600 text-paragraph text-center">We’re here to work for you, start to finish, and beyond. We’ll work with you every step of the way to ensure you’re happy with your design. We’ll even stick around once we’re finished on our end in case you run into problems, or if you need help managing your website.</p>
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