@extends('layouts/app')

@section("body")
@include("components/topbar")
<div class="w-full h-3/4 flex flex-col justify-center items-center">
    <h1 class="font-archivo text-black text-lg mb-2 text-center transition ease-in md:text-xl lg:text-2xl">SORRY, CURRENTLY WE'RE ON PROTOTYPE</h1>
    <h1 class="font-archivo text-center text-transparent font-outline-1 text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">GET MORE UPDATES</h1>
    <input type="email" class="w-[200px] text-center inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700 mb-2" placeholder="johndoe@example.com">
    <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"">SUBSCRIBE</button>
</div>
    
@endsection