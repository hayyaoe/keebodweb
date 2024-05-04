@extends('layouts/app')

@section("title", "KeeBod")

@section("body")
@include("components/navigation")
<div class="w-full h-full place-content-center">
    <div class="flex w-full justify-center font-archivo italic text-6xl sm:text-8xl md:text-9xl xl:text-jumbo">
        <h1>KEE</h1>
        <h1 class="text-transparent font-outline-1">BOD</h1>
    </div>
    <h1 class="-translate-y-3 font-archivo italic text-2xl text-center w-full text-transparent font-outline-1 sm:text-4xl sm:-translate-y-4 md:text-5xl "> BUILD YOUR DREAM </h1>
</div>
@include("components/bottombar")
@endsection
