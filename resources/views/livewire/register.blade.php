<div>
    <!-- Navigation Bar -->
    <nav class="p-4 fixed w-full md:flex md:p-0 ml-4 md:pt-4 z-20">
        <div class="flex items-center justify-between w-full md:w-auto">
            <span class="font-archivo text-3xl">
                <a href="{{ route('home') }}" class="flex mx-4">
                    <h1 class="italic">KEE</h1>
                    <h1 class="text-transparent font-outline-1 italic">BOD</h1>
                </a>
            </span>
        </div>
    </nav>
    <form wire:submit.prevent="register" method="POST">
        @csrf

        <div class="flex flex-col md:flex-row h-screen relative">

            <!-- Left Section -->
            <div class="w-full md:w-1/3 bg-teal-400 flex items-center justify-center p-20">
                <div class="text-center">
                    <h1 class="text-4xl max-w-2xl mb-4 font-extrabold tracking-tight leading-none font-archivo">
                        Are you a KeeBoders?
                    </h1>
                    <p class="max-w-2xl mb-6 font-normal text-gray-700 md:text-lg lg:text-xl">
                        Login to your account now
                    </p>
                    <a href={{ route('login') }}
                        class="inline-flex items-center bg-white justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-700 focus:ring-4 hover:text-white">
                        Login
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Background Image with Blur -->
            <div class="w-full md:w-2/3 flex items-center justify-center mx-auto relative border-l border-black">
                <div class="absolute inset-0 bg-cover bg-center filter blur-lg"
                    style="background-image: url('{{ asset('images/KeeBod2.png') }}');"></div>
                <div class="relative z-10">

                    <div class="bg-white p-20 border border-black">

                        <h1
                            class="w-80 text-4xl max-w-2xl mb-4 font-extrabold tracking-tight leading-none font-archivo">
                            Join the KeeBoders
                        </h1>
                        <p class="max-w-2xl mb-6 font-normal md:text-lg lg:text-xl">
                            Register new account FREE
                        </p>
                        <div class="mb-6">
                            <div class="relative">
                                <input type="text" id="name" wire:model="name" name="name" required
                                    class="peer w-60 rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                                    placeholder="Username" />

                                <label for="username"
                                    class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Username</label>
                            </div>
                            @error('username')
                                <span class="text-red-500"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div class="relative">
                                <input type="email" id="email" wire:model="email" name="email" required
                                    class="peer w-60 rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                                    placeholder="Email" />

                                <label for="email"
                                    class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Email</label>
                            </div>
                            @error('email')
                                <span class="text-red-500"> {{ $message }} </span>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div class="relative">
                                <input type="password" id="password" wire:model="password" required name="password"
                                    class="peer w-60 rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                                    placeholder="Password" />

                                <label for="password"
                                    class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Password</label>
                            </div>
                            @error('password')
                                <span class="text-red-500"> {{ $message }} </span>
                            @enderror
                        </div>

                        <button type="submit"
                            class="inline-flex items-center bg-teal-400 justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-500 focus:ring-4 focus:ring-teal-800 dark:focus:ring-primary-900">
                            Register
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div>
            <label for="name">USERNAME</label>
            <input type="text" id="name" wire:model="name" name="name" required>
            @error('username')
                <span> {{ $message }} </span>
            @enderror
        </div>

        <div>
            <label for="email">EMAIL</label>
            <input type="email" id="email" wire:model="email" name="email" required>
            @error('email')
                <span> {{ $message }} </span>
            @enderror
        </div>

        <div>
            <label for="password">PASSWORD</label>
            <input type="password" id="password" wire:model="password" required name="password">
            @error('password')
                <span> {{ $message }} </span>
            @enderror
        </div>

        <button type="submit">REGISTER</button> --}}


    </form>
</div>
