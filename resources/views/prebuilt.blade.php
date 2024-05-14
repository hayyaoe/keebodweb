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

                        <ul class="mt-2 flex flex-wrap gap-1">
                        <li>
                            <input type="radio" id="CHERRYRED" value="CHERRY RED" class="hidden peer" name="switches" required />
                            <label for="CHERRYRED" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                CHERRY RED
                            </label>
                        <li>
                        <li>
                            <input type="radio" id="ALPACCA" value="ALPACCA" class="hidden peer" name="switches" required />
                            <label for="ALPACCA" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                ALPACCA
                            </label>
                        <li>
                        <li>
                            <input type="radio" id="BOBA U4T" value="BOBAU4T" class="hidden peer" name="switches" required />
                            <label for="BOBA U4T" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                BOBA U4T
                            </label>
                        <li>
                        <li>
                            <input type="radio" id="CSAIR" value="CSAIR" class="hidden peer" name="switches" required />
                            <label for="CSAIR" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                AKKO CS AIR
                            </label>
                        <li>
                        </ul>

                    <h1 class="mt-6 font-archivo text-2xl xl:text-xl 2xl:text-2xl">CASE</h1>
                    <ul class="mt-2 flex flex-wrap gap-1">
                        <li>
                            <input type="radio" id="BLUE" value="BLUE" class="hidden peer" name="case" required />
                            <label for="BLUE" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                BLUE
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="BLACKMATTE" value="BLACKMATTE" class="hidden peer" name="case" required />
                            <label for="BLACKMATTE" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                BLACK MATTE
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="BLACKGLOSS" value="BLACKGLOSS" class="hidden peer" name="case" required />
                            <label for="BLACKGLOSS" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                BLACK GLOSS
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="PATINA" value="PATINA" class="hidden peer" name="case" required />
                            <label for="PATINA" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                BLUE
                            </label>
                        </li>
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
