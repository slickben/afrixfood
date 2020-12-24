@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto flex-grow bg-gray-100">
    <div class="w-full sm:px-6">

        @if (session()->has('success_message'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session()->get('success_message') }}
            </div>
        @endif

        
    </div>

    <section>
        <div class="grid grid-cols-12 gap-8 py-8 relative">
            <div class="col-start-3 col-span-8 ">
                @if( Cart::count() > 0)
                <!-- <span class="text-green-500 absolute top-0 inset-0"></span> -->
                    <h1 class="text-3xl font-semibold pb-10">Cart {{ Cart::count() }} Items </h1>
                    
                    <div class="">
                        <div class="grid grid-cols-11">
                            <h3 class="col-span-6 pb-4 text-sm text-gray-500 uppercase">Item</h3>
                            <h3 class="col-span-1 pb-4 text-sm text-center text-gray-500 uppercase">Quantity</h3>
                            <h3 class="col-span-2 pb-4 text-sm text-center text-gray-500 uppercase">Unit Price</h3>
                            <h3 class="col-span-2 pb-4 text-sm text-center text-gray-500 uppercase">Subtotal</h3>
                            <div class="col-span-6 border-r flex p-4 bg-white">
                                <img class="w-20 h-20 pr-3" src="{{ asset('images/download (4).jpg') }}" alt="" srcset="">
                                <div>
                                    <h2>Men Casual Sports Shoes Lace Up Sneakers-BlackRed</h2>
                                    <p class="text-xs py-2 text-gray-400">Eligible for Free Shipping with Jumia Express (Lagos Only) OR Jumia Prime</p>
                                    <div class="flex justify-between items-center">
                                        <button 
                                            class="text-green-500 outline-none focus:outline-none">
                                            Move to Save Items
                                        </button>
                                        <button 
                                            class="text-red-500 outline-none focus:outline-none">
                                            Remove Items
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1 border-r flex items-center justify-center p-4 bg-white">
                                <input value="1" class="w-16 border-0" type="number">
                            </div>
                            <div class="col-span-2 border-r flex items-center justify-center p-4 bg-white">
                                <p class="text-xl py-5 ">$ 1,650</p>
                            </div>
                            <div class="col-span-2 flex items-center justify-center p-4 bg-white">
                                <p class="text-xl py-5 font-semibold text-yellow-500">$ 1,650</p>
                            </div>
                        </div>

                        <div class="flex justify-end pt-10">
                            <div>
                                <h2 class="text-lg font-semibold text-right">
                                    Total: <span class="pl-10 text-yellow-500">₦ 10,190</span> 
                                </h2>
                                <p class="py-3 text-xs text-gray-400 text-right ">Delivery fee not included yet</p>
                                <button 
                                    class="font-semibold rounded shadow-md bg-yellow-500 text-white py-2 px-4 outline-none focus:outline-none">
                                    PROCEED TO CHECKOUT
                                </button>
                            </div>
                        </div>
                    </div>
                @else
                    {{ Cart::count() }}
                    <h3>No Items In Cart</h3>

                @endif
            </div>
        </div>
    </section>
</main>
@endsection
