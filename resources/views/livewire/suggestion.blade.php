<div class="mx-auto md:w-2/3 lg:w-1/2">
    <form wire:submit='send()'>
        @csrf
        <div class="-m-2 flex flex-wrap text-black">
            <div class="w-1/2 p-2">
                <div class="relative">
                    <input type="text" id="name" wire:model="name"
                        class="peer w-full rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                        placeholder="Name" />
                    <label for="name"
                        class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Name</label>
                </div>
            </div>
            <div class="w-1/2 p-2">
                <div class="relative">
                    <input type="text" id="email" wire:model="email"
                        class="peer w-full rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                        placeholder="Email" />
                    <label for="email"
                        class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Email</label>
                </div>
            </div>
            <div class="w-full p-2">
                <div class="relative">
                    <textarea type="text" id="suggestion" wire:model="suggestion"
                        class="peer w-full h-60 rounded border border-gray-400 bg-white bg-opacity-40 py-1 px-3 text-base leading-8 text-black placeholder-transparent outline-none transition-colors duration-200 ease-in-out focus:border-teal-400 focus:bg-white focus:ring-2"
                        placeholder="Suggestion"></textarea>
                    <label for="suggestion"
                        class="absolute left-3 -top-6 bg-transparent text-sm leading-7 text-teal-400 transition-all peer-placeholder-shown:left-3 peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-teal-400 peer-focus:left-3 peer-focus:-top-6 peer-focus:text-sm peer-focus:text-teal-500">Message</label>
                </div>
            </div>
            <div class="w-full p-2">
                <button
                    class="w-full mx-auto rounded border border-teal-400 bg-teal-400 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-teal-400 focus:outline-none focus:ring active:text-indigo-00"
                    wire:click="send()">{{ $button }}</button>
            </div>
        </div>
    </form>
</div>
