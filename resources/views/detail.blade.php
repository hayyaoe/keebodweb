@extends('layouts/app2')

@section('title', 'KeeBod')

@section('body')
    @include('components/topbar')

    <div class="flex h-screen items-center justify-center bg-gray-100 p-6">
        <div class="bg-white h-fit rounded-lg shadow-lg p-6 flex flex-col w-100">
            <!-- Cart Header -->
            <h2 class="text-2xl font-extrabold tracking-tight leading-none font-archivo mb-6">Shopping Cart</h2>

            <!-- Cart Items -->
            <div class="space-y-4">
                {{-- <!-- Cart Item -->
                <div class="flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                    <img class="w-40 h-40 rounded-lg object-cover" src="{{ asset('images/Keyboard2.png') }}"
                        alt="Custom Mechanical Keyboard">
                    <div class="ml-4 flex-1">
                        <h3 class="text-lg font-semibold">Custom Mechanical Keyboard</h3>
                        <p class="text-gray-600">40% | ALU | BOBA U4T | APPLE | Wireless | DIY</p>
                    </div>
                    <div class="text-right p-8">
                        <p class="text-lg font-semibold">$250.00</p>
                        <button class="mt-2 text-sm text-red-500 hover:underline">Remove</button>
                    </div>
                </div> --}}

                <div class="flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                    {{-- <img class="w-40 h-40 rounded-lg object-cover" src="{{ asset('images/Keyboard2.png') }}"
                        alt="Custom Mechanical Keyboard"> --}}
                    <div class="ml-0 flex-1">
                        <h3 class="text-lg font-semibold">Custom Mechanical Keyboard</h3>
                        <p class="text-gray-600 mb-2">40% | ALU | BOBA U4T | APPLE | Wireless | DIY</p>
                        <div class="flex items-center justify-between">
                            <p class="text-lg font-semibold">$250.00</p>
                            <button class="text-sm text-red-500 hover:underline">Remove</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Cart Summary -->
            <div class="mt-6 p-4 bg-gray-50 rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold mb-4">Order Summary</h3>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Subtotal</span>
                    <span class="text-gray-800">$250.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Shipping</span>
                    <span class="text-gray-800">$10.00</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-gray-600">Tax</span>
                    <span class="text-gray-800">$20.00</span>
                </div>
                <div class="flex justify-between font-semibold">
                    <span class="text-gray-800">Total</span>
                    <span class="text-gray-900">$280.00</span>
                </div>
            </div>

    
            <a href="{{ route('prebuilt') }}"
                    class="mt-6 inline-flex items-center bg-teal-400 justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-500 focus:ring-4 focus:ring-teal-800 dark:focus:ring-primary-900">
                    Proceed to Checkout
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
        </div>
    </div>

@endsection
