@extends('layouts/app2')

@section('title', 'KeeBod')

@section('body')
    @include('components/topbar')
    <div class="w-full h-full p-6">

        <div class="p-2 mx-auto">
            <img class="xl:size-3/4 mx-auto" src="{{ asset('images/KeeBod2.png') }}">
        </div>


        <div class="text-center">
            <h1 class="font-archivo text-lg md:text-xl lg:text-2xl xl:text-xl">
                SCROLL TO EXPLORE
            </h1>
            <div class="max-w-screen-lg mx-auto">
                <img class="mx-auto w-16 h-16" src="{{ asset('images/down-arrow.svg') }}">
            </div>
        </div>



        <div class="py-20">

        </div>


        <div class="p-2 lg:flex max-w-screen justify-center">
            <div class="w-full lg:w-4/12">
                <a href="{{ asset('images/Keyboard1.png') }}" data-lightbox="keyboards" data-title="ENCHANT ERGO 1">
                    <img class="lg:pr-12 h-auto mb-4 transition duration-300 ease-in-out transform hover:brightness-75"
                        src="{{ asset('images/Keyboard1.png') }}" alt="Big Keyboard Image">
                </a>
                <div class="flex flex-wrap">
                    <a href="{{ asset('images/Keyboard2.png') }}" data-lightbox="keyboards" data-title="ENCHANT ERGO 2"
                        class="w-2/12 mx-1 mb-4">
                        <img class="w-full h-auto transition duration-300 ease-in-out transform hover:brightness-75"
                            src="{{ asset('images/Keyboard2.png') }}" alt="Small Keyboard Image">
                    </a>
                    <a href="{{ asset('images/Keyboard3.png') }}" data-lightbox="keyboards" data-title="ENCHANT ERGO 3"
                        class="w-2/12 mx-1 mb-4">
                        <img class="w-full h-auto transition duration-300 ease-in-out transform hover:brightness-75"
                            src="{{ asset('images/Keyboard3.png') }}" alt="Small Keyboard Image">
                    </a>
                    <a href="{{ asset('images/Keyboard4.png') }}" data-lightbox="keyboards" data-title="ENCHANT ERGO 4"
                        class="w-2/12 mx-1 mb-4">
                        <img class="w-full h-auto transition duration-300 ease-in-out transform hover:brightness-75"
                            src="{{ asset('images/Keyboard4.png') }}" alt="Small Keyboard Image">
                    </a>
                    <a href="{{ asset('images/Keyboard5.png') }}" data-lightbox="keyboards" data-title="ENCHANT ERGO 5"
                        class="w-2/12 mx-1 mb-4">
                        <img class="w-full h-auto transition duration-300 ease-in-out transform hover:brightness-75"
                            src="{{ asset('images/Keyboard5.png') }}" alt="Small Keyboard Image">
                    </a>
                </div>

            </div>


            <div class="w-full lg:w-4/12">
                <div class="justify-center p-8 py-2">
                    <h1 class="font-archivo text-2xl xl:text-xl">ENCHANT <span
                            class="text-transparent font-outline-1">ERGO</span></h1>
                    <h1 class="text-xl">
                        IDR 699.000,00
                    </h1>
                    <br>
                    <h1 class="text-xl">
                        40% ERGONOMIC MECHANICAL KEYBOARD DESIGNED BY THE COMMUNITY FOR THE COMMUNITY
                    </h1>
                    <br>
                    <ul class="list-disc ml-8">
                        <li>
                            ERGONOMIC DESIGN
                        </li>
                        <li>
                            SOUTH FACING
                        </li>
                        <li>
                            HOT SWAP PCB
                        </li>
                        <li>
                            VIA & QMK SUPPORT
                        </li>
                    </ul>

                    <h1 class="mt-6 font-archivo text-2xl xl:text-xl 2xl:text-2xl">SWITCH</h1>

                    <div class="mt-2 flex flex-wrap">
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            CHERRY RED
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            ALPACCA
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            BOBA U4T
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            CS AIR
                        </p>
                    </div>

                    <h1 class="mt-6 font-archivo text-2xl xl:text-xl 2xl:text-2xl">CASE</h1>
                    <div class="mt-2 flex flex-wrap">
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            CLEAR
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            BLUE
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            BLACK MATTE
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            BLACK GLOSS
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent hover:bg-gray-300 font-archivo text-gray-800 font-semibold py-2 px-4 border border-black">
                            PATINA
                        </p>
                    </div>

                     <a href="{{ route('subscribe') }}">
                    <button
                        class="mt-8 text-xl w-full mr-2 mb-2 bg-green-500 hover:bg-transparent hover:text-green-500 font-archivo text-white font-semibold py-2 px-4 border border-green-800">
                            BUY
                    </button>
                     </a>
                </div>
            </div>
        </div>






    </div>
    {{-- @include("components/bottombar") --}}

    <script src="{{ asset('js/lightbox-plus-jquery.js') }}"></script>
@endsection
