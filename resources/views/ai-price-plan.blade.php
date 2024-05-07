@extends('layouts/app')

@section("body")
@include("components/topbar")
<div class="relative w-full h-full">
  <div class="absolute hidden lg:block h-96"></div>
  <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-">
  <div class="max-w-xl mb-10 md:mx-auto px-8 sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="top-10 font-archivo max-w-2lg mb-6 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">
      <span class="font-outline-1 text-transparent">AI Suggestion </span> Price Plan
    </h2>
    <p class="text-sm text-gray-600 md:text-md font-semibold font-archivo">
      We are introducing a revolutionary feature that utilizes AI to help you design your keyboard according to your wants and needs. 
    </p>
  </div>
  <div class="grid font-archivo max-w-screen-md gap-10 md:grid-cols-2 sm:mx-auto">
    <div>
      <div class="p-8 bg-gray-900 rounded">
        <div class="mb-4 text-center">
          <p class="text-2xl font-medium tracking-wide text-teal-400 ">
            Starter Plan
          </p>
          <div class="flex items-center justify-center py-5">
            <p class="mr-2 text-5xl font-semibold text-white lg:text-[70px]">
              $39
            </p>
            <p class="text-lg text-gray-500">/ day</p>
          </div>
        </div>
        <ul class="mb-8 space-y-2">
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-sm text-gray-300">Basic AI models</p>
          </li>
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-medium text-gray-300">Generate 20 images</p>
          </li>
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-medium text-gray-300">Basic fonts</p>
          </li>
        </ul>
        <a
          href="{{ route('coming-soon') }}"
          class="inline-flex items-center justify-center w-full h-12 px-6 border-2 border-teal-400 font-semibold tracking-wide text-teal-400 transition duration-200 rounded shadow-md bg-transparent hover:bg-teal-400 hover:text-gray-900 focus:shadow-outline focus:outline-none"
        >
          Get Now
      </a>
      </div>
      <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
      <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
      <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
    </div>
    <div class="mt-[-22px]">
      <div class="p-8 bg-gray-900 rounde">
        <div class="mb-4 text-center">
          <p class="text-4xl font-medium tracking-wide text-teal-400">Pro Plan</p>
          <div class="flex items-center justify-center py-5">
            <p class="mr-2 text-5xl font-semibold text-white lg:text-[80px]">
              $59
            </p>
            <p class="text-lg text-gray-500">/ day</p>
          </div>
        </div>
        <ul class="mb-8 space-y-2">
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-medium text-gray-300">Advanced AI models</p>
          </li>
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-medium text-gray-300">Unlimited image generator</p>
          </li>
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-medium text-gray-300">Premium fonts</p>
          </li>
          <li class="flex items-center">
            <div class="mr-3">
              <svg class="w-4 h-4 text-teal-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
              </svg>
            </div>
            <p class="font-medium text-gray-300">Download image</p>
          </li>
        </ul>
        <a
          href="{{ route('coming-soon') }}"
          class="mb-8 inline-flex items-center justify-center w-full h-12 px-6 border-2 border-teal-400 font-semibold tracking-wide text-teal-400 transition duration-200 rounded shadow-md bg-transparent hover:bg-teal-400 hover:text-gray-900 focus:shadow-outline focus:outline-none"
        >
          Get Now
        </a>
      </div>
      <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
      <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
      <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
    </div>
  </div>
</div>
</div>
@endsection