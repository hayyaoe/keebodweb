<div class="w-full h-full">
    <nav class="p-4 fixed w-full bg-[#E8F4FA] md:flex md:justify-center md:p-0 md:pt-24">
        <div class="flex items-center justify-between">
            <span class="font-archivo text-3xl">
                <a href="" class="flex mx-4">
                    <h1>KEE</h1>
                    <h1 class="text-transparent font-outline-1">BOD</h1>
                </a>
            </span>

    </nav>
    <div class="w-full h-full place-content-center">
        @if($currentStep === 1)
        <h1>ini step 1</h1>
        <div class="flex justify-end px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="caseMaterial()">NEXT</button>
        </div>
        @elseif($currentStep === 2)
        <h1>ini step 2</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="switch()">NEXT</button>
        </div>
        @elseif($currentStep === 3)
        <h1>ini step 3</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="keycaps()">NEXT</button>
        </div>
        @elseif($currentStep === 4)
        <h1>ini step 4</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="accentKeycaps()">NEXT</button>
        </div>
        @elseif($currentStep === 5)
        <h1>ini step 5</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="switchLubrication()">NEXT</button>
        </div>
        @elseif($currentStep === 6)
        <h1>ini step 6</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="stabilizers()">NEXT</button>
        </div>
        @elseif($currentStep === 7)
        <h1>ini step 7</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="connection()">NEXT</button>
        </div>
        @elseif($currentStep === 8)
        <h1>ini step 8</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="mountingType()">NEXT</button>
        </div>
        @elseif($currentStep === 9)
        <h1>ini step 9</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="assembly()">NEXT</button>
        </div>
        @elseif($currentStep === 10)
        <h1>ini step 10</h1>
        <div class="flex justify-between px-10">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="order()">NEXT</button>
        </div>
        @elseif($currentStep === 11)
        <h1>ini step 11</h1>
        @endif
    </div>
</div>
