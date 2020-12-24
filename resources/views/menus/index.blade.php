@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 flex-grow">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        
    </div>

    <section>
        <h1 class="text-center text-3xl font-semibold">Big Chops, Small Money</h1>

        <div class="grid grid-cols-12 gap-8 py-8">
            <nav class="col-span-3">
                <ul>
                    <li class="py-2 bg-yellow-500 text-white px-6">
                        <a href="">BREAKFAST MEALS & COMBOS</a>
                    </li>
                    <li class="py-2 px-6">
                        <a href="">1K + COMBO</a>
                    </li>
                    <li class="py-2 px-6">
                        <a href="">WORKAMAN COMBO</a>
                    </li>
                    <li class="py-2 px-6">
                        <a href="">RICE, BEANS & PASTA</a>
                    </li>
                </ul>
            </nav>
            <div class="col-span-9 grid grid-cols-3 gap-6">
                @foreach ($foods as $food)

                    <div class="bg-gray-100">
                        <a href="{{ route('menus.show', $food->slug ) }}">
                            <img class="w-full h-48" src="{{ asset('images/download (4).jpg') }}" alt="" srcset="">
                        </a>
                        <p class="py-3 px-6 text-lg font-bold uppercase text-red-500">{{ $food->name }}</p>
                        <p class="py-3 px-6 text-lg font-semibold uppercase">{{ $food->presetPrice() }}</p>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
