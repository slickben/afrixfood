@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="grid grid-cols-10">
            <div class="col-span-2">
                <img src="{{ asset('images/jumiafood-homepage-left-splash-services.png') }}">
            </div>
            <div class="col-span-6 pt-10">
                <h1 class="text-4xl text-center font-bold">
                    Everything you need, delivered now
                </h1>

                <div class="grid grid-cols-2 px-16 py-20 gap-10">
                    <div class="shadow-lg p-6">
                        <img class="w-20" src="{{ asset('images/f5e52b6988.png') }}" alt="" srcset="">
                        <p class="text-lg font-semibold text-yellow-500">Cool It Down</p>
                        <p class="text-xs">Alcoholic drinks and more to get your party started</p>
                    </div>
                    <div class="shadow-lg p-6">
                        <img class="w-20" src="{{ asset('images/968e035ad0.png') }}" alt="" srcset="">
                        <p class="text-lg font-semibold text-yellow-500">No Let Belle Run You</p>
                        <p class="text-xs">Food you love, from restaurants near you</p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <img src="{{ asset('images/jumiafood-homepage-right-splash-services.jpg') }}">
            </div>
        </section>
        <section>
            <h2 class="text-center text-3xl font-semibold">
                How it Works
            </h2>

            <div class="grid grid-cols-3 py-10 px-20">
                <div>
                    <img class="mx-auto" src="{{ asset('images/how-it-works-1.svg') }}" alt="" srcset="">
                    <h3 class="text-2xl font-semibold text-center pb-4">Set delivery location</h3>
                    <p class="text-gray-400 text-center">Select the location where you want us to deliver</p>
                </div>
                <div>
                    <img class="mx-auto" src="{{ asset('images/how-it-works-2.svg') }}" alt="" srcset="">
                    <h3 class="text-2xl font-semibold text-center pb-4">Choose the product</h3>
                    <p class="text-gray-400 text-center">Browse shops that deliver near you</p>
                </div>
                <div>
                    <img class="mx-auto" src="{{ asset('images/how-it-works-3.svg') }}" alt="" srcset="">
                    <h3 class="text-2xl font-semibold text-center pb-4">Receive it at your doorstep</h3>
                    <p class="text-gray-400 text-center">Your order will be delivered to you in no time</p>
                </div>
            </div>
        </section>
        <section class="py-10">
            <div class="bg-yellow-500 p-10 text-white text-center">
                <h2 class="text-3xl font-semibold ">
                    Subscribe to our newsletter today!
                </h2>
                <p>Don't miss out on our great offers & Receive deals from all our top vendors via e-mail</p>
                <div class="py-10 px-16">
                    <form class="grid grid-cols-3 gap-6" action="">
                        <input
                            placeholder="Enter Your Email" type="text"
                            class="border-0"
                            id="email"
                            name="name"
                        >
                        <select class="border-0 text-dark" name="state" id="state">
                            <option seleted="selected" value="">Selet Your State</option>

                        </select>
                        <button class="bg-gray-700 text-white" >Subscribe Newsletter</button>
                    
                    </form>

                </div>
            </div>        
        </section>
        <section class="py-10">
            <div class="grid grid-cols-3 gap-x-16">
                <div class="">
                    <img src="{{ asset('images/jumia-for-corporate.jpg') }}" alt="" srcset="">
                </div>
                <div class="pt-10 ">
                    <h2 class="text-5xl font-semibold text-center">
                    AfrixFood for Corporate</h2>
                    <p class="pt-4 text-center leading-7 text-lg">Order lunch, fuel for meetings or late-night deliveries to the office. 
                    Your favorite vendors coming to a desk near you.</p>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
