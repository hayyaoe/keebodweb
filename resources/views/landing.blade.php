@extends('layouts/app')

@section("title", "KeeBod")

@section("body")
@include("components/navigation")
<div class="w-full h-full place-content-center">
    <div class="flex w-full justify-center font-archivo italic text-6xl sm:text-8xl md:text-10xl xl:text-11xl 2xl:text-12xl">
        <h1>KEE</h1>
        <h1 class="text-transparent font-outline-1">BOD</h1>
    </div>
    <h1 class="font-archivo italic text-2xl text-center w-full font-outline-1 sm:text-4.5xl md:text-6xl md:-translate-y-6 xl:text-7.5xl xl:-translate-y-7 2xl:text-8.5xl 2xl:-translate-y-10"> BUILD YOUR DREAM </h1>
</div>
@include("components/bottombar")
@endsection
