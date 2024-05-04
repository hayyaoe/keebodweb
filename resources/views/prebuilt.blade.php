@extends('layouts/app2')

@section('title', 'KeeBod')

@section('body')
    @include('components/topbar')
    <div class="w-full h-full p-6">

        <div class="p-2 mx-auto">
            <img class="xl:size-3/4 mx-auto" src="{{ Vite::asset('resources/images/KeeBod2.png') }}">
        </div>


        <div class="text-center">
            <h1 class="font-archivo text-lg md:text-xl lg:text-2xl xl:text-xl">
                SCROLL TO EXPLORE
            </h1>
            <div class="max-w-screen-lg mx-auto">
                <img class="mx-auto w-16 h-16" src="{{ Vite::asset('resources/images/down-arrow.svg') }}">
            </div>
        </div>

        <div class="py-20">

        </div>


        <div class="p-2 xl:flex max-w-screen">
            <div class="flex flex-col items-center w-50% mx-auto">
                <img class="w-full h-auto mb-4" src="{{ Vite::asset('resources/images/Keyboard1.png') }}"
                    alt="Big Keyboard Image">

                <div class="flex justify-center">
                    <img class="w-1/4 h-auto mx-1" src="{{ Vite::asset('resources/images/Keyboard2.png') }}"
                        alt="Small Keyboard Image">
                    <img class="w-1/4 h-auto mx-1" src="{{ Vite::asset('resources/images/Keyboard3.png') }}"
                        alt="Small Keyboard Image">
                    <img class="w-1/4 h-auto mx-1" src="{{ Vite::asset('resources/images/Keyboard4.png') }}"
                        alt="Small Keyboard Image">
                    <img class="w-1/4 h-auto mx-1" src="{{ Vite::asset('resources/images/Keyboard5.png') }}"
                        alt="Small Keyboard Image">
                </div>
            </div>





            <div class="w-50% mx-auto">
                <div class="justify-center p-8 py-4">
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
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            CHERRY RED
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            ALPACCA
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            BOBA U4T
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            BOBA U4T
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            CS AIR
                        </p>
                    </div>

                    <h1 class="mt-6 font-archivo text-2xl xl:text-xl 2xl:text-2xl">CASE</h1>
                    <div class="mt-2 flex flex-wrap">
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            CLEAR
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            BLUE
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            BLACK MATTE
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            BLACK GLOSS
                        </p>
                        <p
                            class="mr-2 mb-2 bg-transparent font-archivo text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            PATINA
                        </p>
                    </div>

                    <button
                        class="mt-8 text-xl w-full mr-2 mb-2 bg-green-500 hover:bg-transparent hover:text-green-500 font-archivo text-white font-semibold py-2 px-4 border border-green-800 rounded shadow">
                        <a href="/">
                            BUY
                        </a>
                    </button>
                </div>


            </div>
        </div>

    </div>
    {{-- @include("components/bottombar") --}}
@endsection
