@extends('layouts/app2')
@section("title", "KeeBod")

@section("body")

@include("components/topbar")
<div class="w-full h-full">
    <div class="flex justify-center mt-[100px]">
        <div class="flex flex-col text-center items-center w-full">
            <p class="font-archivo pb-6 text-3xl">GENERATE <span class="font-outline-1 text-transparent">KEYBOARD</span> DESIGN WITH AI PROMPT</p>
            <textarea class="w-3/4 font-archivo bg-[#BFD4DE] h-80 p-4 m-4 border border-gray-500 rounded-md resize-none focus:outline-none focus:border-teal-400"></textarea>
            <a href="{{ route('ai-price-plan') }}" class="w-3/4 bg-teal-400 py-2 rounded-lg font-archivo hover:bg-teal-500 transition duration-300">GENERATE</a>
        </div>
    </div>
</div>

@endsection