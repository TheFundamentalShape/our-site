@extends('layouts.master')

@section('title')
    Register
@endsection

@section('content')
    <div class="lg:px-56 px-12 mb-10">
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

            @if(session()->has('recaptcha-error'))
                <div class="bg-red-600 p-8 mt-20 mr-8 rounded shadow-2xl">
                    <div class="lg:flex">
                        <div class="lg:mr-8 lg:mb-0 mb-8">
                            <img class="rounded" src="/img/talk-hand.gif" alt="Wrong.">
                        </div>
                        <div>
                            <h1 class="text-brand text-white text-4xl">You're a robot?! 🤔</h1>
                            <p class="text-white text-lg text-paragraph">We don't work with robots. We're afraid they'll become cybernetic entities and kill us all. Try clickin' that little box at the bottom of the page so we know you're not a robot.</p>
                        </div>
                    </div>
                </div>
            @endif
            
        <h1 class="pt-20 text-5xl lg:text-6xl text-brand text-gray-800">Hi there.</h1>
        <p class="max-w-md text-paragraph text-gray-500 font-bold">Let's get you set up in our system so we can start buildin' you somethin' real cool, real quick.</p>

        <form action="/register" method="POST">
            @csrf

            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What's your name, friend?
                </label>
                <input type="text" name="name" placeholder="Dwight Kurt Schrute III" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>
    
            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What's your email address?
                </label>
                <input type="email" name="email" placeholder="d-schrute@dundermifflin.com" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>
    
            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What is the best phone number to reach you at?
                </label>
                <input type="tel" name="phone" placeholder="(518)-801-4122" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>
    
            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What is your business or company called?
                </label>
                <input type="text" name="company" placeholder="Schrute Family Farm" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>
    
            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What is your domain name?
                </label>
                <input type="text" name="domain" placeholder="schrute-farms.org" class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
                <p class="text-sm text-paragraph pt-2 text-gray-500 max-w-xl">If you don't have one or need help getting one, please call us at <strong>(518)-415-1881</strong> and we'll help you get the perfect domain name! Once you do that, come back here and fill this out again! 😎</p>
            </div>
    
            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    What would you like your password to be?
                </label>
                <input type="password" name="password" placeholder="Zero, Zero, Zero, Zero, zero, one." class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>
    
            <div class="pt-8 pr-8">
                <label class="text-paragraph text-gray-800 font-bold">
                    Give us that one more time!
                </label>
                <input type="password" name="password_confirmation" placeholder="Zero, Zero, Zero, Zero, zero, one." class="w-full mt-2 bg-white rounded py-3 px-4 text-paragraph shadow-md">
            </div>

            <div class="pt-8 pr-8">
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            </div>
    
            <div class="pt-8 pr-8">
                <button type="submit" class="text-brand text-lg px-4 py-3 bg-brand-pink text-white hover:bg-white hover:text-brand-pink rounded shadow-md">Groovy! Let's get started!</button> <a href="{{ route('login') }}" class="inline-block md:px-6 py-5 text-paragraph hover:underline font-bold text-gray-500">Have an account? Login.</a>
            </div>
        </form>

    </div>
@endsection
