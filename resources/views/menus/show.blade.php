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

    <section class="grid grid-cols-10">
        <div class="col-start-2 col-span-8 grid grid-cols-2 gap-20">
            <div class="border flex items-center justify-center h-64 bg-gray-100">
                <img class="" src="{{ asset('images/download (4).jpg') }}" alt="" srcset="">
            </div>
            <div>
                <h2 class="text-4xl font-semibold capitalize pb-6 text-yellow-500">{{ $food->name }}</h2>
                <p class="text-gray-400">{{ $food->details }}</p>
                <p class="text-5xl py-5 font-semibold">{{ $food->presetPrice() }}</p>
                <p class="text-gray-300 pb-6">{{ $food->description }}</p>
              

                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $food->id }}">
                    <input type="hidden" name="name" value="{{ $food->name}}">
                    <input type="hidden" name="price" value="{{ $food->price }}">
                    <button     
                        type="submit"
                        class="px-6 py-2 border hover:bg-green-500
                        outline-none hover:outline-none focus:outline-none hover:text-white">
                        Add To Cart
                    </button>
                </form>
                
            </div>
        </div>
        <div>
            {{ $mightAlsoLike }}
        </div>
    </section>
</main>
@endsection
