@extends('layouts/app')

@section("body")
<div class="relative w-full h-full">
  <div class="absolute hidden w-ful lg:block h-96"></div>
  <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
      <h2 class="font-archivo max-w-lg mb-6 text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
        <span class="relative inline-block">
          <span class="relative">Affordable</span>
        </span>
        for everyone
      </h2>
      <p class="text-sm text-gray-800 md:text-md font-semibold font-archivo">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
      </p>
    </div>
    <div class="grid font-archivo max-w-screen-md gap-10 md:grid-cols-2 sm:mx-auto">
      <div>
        <div class="p-8 bg-gray-900 rounded">
          <div class="mb-4 text-center">
            <p class="text-xl font-medium tracking-wide text-white">
              Starter Plan
            </p>
            <div class="flex items-center justify-center">
              <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                $39
              </p>
              <p class="text-lg text-gray-500">/ day</p>
            </div>
          </div>
          <ul class="mb-8 space-y-2">
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-sm text-gray-300">Basic AI models</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300">Generate 20 images</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300">Basic fonts</p>
            </li>
          </ul>
          <button
            type="submit"
            class="inline-flex items-center justify-center w-full h-12 px-6 border-2 border-teal-400 font-semibold tracking-wide text-teal-400 transition duration-200 rounded shadow-md bg-transparent hover:bg-teal-400 hover:text-gray-900 focus:shadow-outline focus:outline-none"
          >
            Get Now
          </button>
        </div>
        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
      </div>
      <div>
        <div class="p-8 bg-gray-900 rounded">
          <div class="mb-4 text-center">
            <p class="text-xl font-medium tracking-wide text-white">Pro Plan</p>
            <div class="flex items-center justify-center">
              <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                $59
              </p>
              <p class="text-lg text-gray-500">/ day</p>
            </div>
          </div>
          <ul class="mb-8 space-y-2">
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300">Advanced AI models</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300">Unlimited image generator</p>
            </li>
            <li class="flex items-center">
              <div class="mr-3">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                  <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                  <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                </svg>
              </div>
              <p class="font-medium text-gray-300">Premium fonts</p>
            </li>
          </ul>
          <button
            type="submit"
            class="inline-flex items-center justify-center w-full h-12 px-6 border-2 border-teal-400 font-semibold tracking-wide text-teal-400 transition duration-200 rounded shadow-md bg-transparent hover:bg-teal-400 hover:text-gray-900 focus:shadow-outline focus:outline-none"
          >
            Get Now
          </button>
        </div>
        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
      </div>
    </div>
  </div>
</div>
@endsection