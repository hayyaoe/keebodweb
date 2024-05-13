<div class="w-full h-full">
    <div class="fixed top-0 w-screen ">
        @include('components/topbar')
    </div>

    <div class="w-full h-full flex flex-col place-content-center items-center">
        <form wire:submit="subscribe()" class="w-full h-full flex flex-col place-content-center items-center">
            <h1 class="font-archivo text-black text-lg mb-2 text-center transition ease-in md:text-xl lg:text-2xl">SORRY, CURRENTLY WE'RE ON PROTOTYPE</h1>
            <h1 class="font-archivo text-transparent font-outline-1 text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">GET MORE UPDATES</h1>
            <input type="email" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700 mb-2" wire:model="email" placeholder="johndoe@example.com">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="subscribe()">SUBSCRIBE</button>
        </form>
    </div>
</div>
