<div class="w-full h-full">
    <nav class="p-4 fixed w-full bg-[#E8F4FA] md:flex md:justify-center md:p-0 md:pt-24">
        <div class="flex items-center justify-between">
            <span class="font-archivo text-3xl">
                <a href="{{ route('home') }}" class="flex mx-4">
                    <h1 class="italic">KEE</h1>
                    <h1 class="text-transparent font-outline-1 italic">BOD</h1>
                </a>
            </span>
        </div>
    </nav>

    <div class="w-full h-full flex flex-col place-content-center items-center">
        <form wire:submit="orderStep()" class="w-full h-full flex flex-col place-content-center items-center">
            @if($currentStep !== 1 && $currentStep !== 7)
                <div class="w-4/6 h-4 px-1 border border-black place-content-center mb-4">
                    <div class="w-1/2 h-1 bg-black p-1" role="progressbar"
                        style="width: {{ $currentStep == 6 ? 100 : (($currentStep - 1) / 5) * 100 }}%;"></div>
                </div>
            @endif
            @if($currentStep === 1)
            <div class="w-full flex flex-col items-center mb-6">
                <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT KEYBOARD TYPE</h1>
                <div class="flex space-x-2">
                    @foreach($typesAvailable as $type)
                    <input type="radio" id="{{ $type->name }}" wire:model="type_id" value="{{ $type->id }}" class="hidden" required />
                    <label for="{{ $type->name }}" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700">
                        <div class="block">
                            <div class="text-lg font-archivo text-transparent font-outline-1 hover:text-black md:text-xl lg:text-2xl">{{ $type->name }}</div>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="w-5/6 flex justify-end md:px-20">
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="switchStep()">NEXT</button>
            </div>
            @elseif($currentStep === 2)
            <div class="w-full h-3/6 flex flex-col items-center">
                <h1 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in md:text-xl lg:text-2xl">PREVIEW</h1>
                <div class="mx-10 my-2 border border-black w-5/6 md:w-4/6 h-5/6 flex justify-center items-center"> <!-- Updated classes here -->
                    <img src="{{ asset('images/KeyboardMockUp1.png') }}" class="h-4/6">
                </div>
            </div>
            <div class="w-full flex flex-col items-center mb-6">
                <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl ">SELECT SWITCH</h1>
                <div class="flex space-x-2">
                    @foreach($switchesAvailable as $switchy)
                    <input type="radio" id="{{ $switchy->name }}" wire:model="keyswitch_id" value="{{ $switchy->id }}" class="hidden" required />
                    <label for="{{ $switchy->name }}" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700">
                        <div class="block">
                            <div class="text-lg font-archivo text-transparent font-outline-1 hover:text-black md:text-xl lg:text-2xl">{{ $switchy->name }}</div>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="w-5/6 flex justify-between items-center md:px-20">
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="keycapsStep()">NEXT</button>
            </div>
            @elseif($currentStep === 3)
            <div class="w-full h-3/6 flex flex-col items-center">
                <h1 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in md:text-xl lg:text-2xl">PREVIEW</h1>
                <div class="mx-10 my-2 border border-black w-5/6 md:w-4/6 h-5/6 flex justify-center items-center"> <!-- Updated classes here -->
                    <img src="{{ asset('images/KeyboardMockUp2.png') }}" class="h-4/6">
                </div>
            </div>
            <div class="w-full flex flex-col items-center mb-6">
                <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl ">SELECT KEYCAPS</h1>
                <div class="flex space-x-2">
                    @foreach($keycapsAvailable as $keycap)
                    <input type="radio" id="{{ $keycap->name }}" wire:model="keycap_id" value="{{ $keycap->id }}" class="hidden" required />
                    <label for="{{ $keycap->name }}" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700">
                        <div class="block">
                            <div class="text-lg font-archivo text-transparent font-outline-1 hover:text-black md:text-xl lg:text-2xl">{{ $keycap->name }}</div>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="w-5/6 flex justify-between items-center md:px-20">
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="connectionStep()">NEXT</button>
            </div>
            @elseif($currentStep === 4)
            <div class="w-full h-3/6 flex flex-col items-center">
                <h1 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in md:text-xl lg:text-2xl">PREVIEW</h1>
                <div class="mx-10 my-2 border border-black w-5/6 md:w-4/6 h-5/6 flex justify-center items-center"> <!-- Updated classes here -->
                    <img src="{{ asset('images/KeyboardMockUp3.png') }}" class="h-4/6">
                </div>
            </div>
            <div class="w-full flex flex-col items-center mb-6">
                <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT CONNECTION</h1>
                <div class="flex space-x-2">
                     @foreach($connectionsAvailable as $connection)
                    <input type="radio" id="{{ $connection->name }}" wire:model="connection_id" value="{{ $connection->id }}" class="hidden" required />
                    <label for="{{ $connection->name }}" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700">
                        <div class="block">
                            <div class="text-lg font-archivo text-transparent font-outline-1 hover:text-black md:text-xl lg:text-2xl">{{ $connection->name }}</div>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="w-5/6 flex justify-between items-center md:px-20">
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="assemblyStep()">NEXT</button>
            </div>
            @elseif($currentStep === 5)
            <div class="w-full h-3/6 flex flex-col items-center">
                <h1 class="font-archivo text-transparent font-outline-1 text-lg transition ease-in md:text-xl lg:text-2xl">PREVIEW</h1>
                <div class="mx-10 my-2 border border-black w-5/6 md:w-4/6 h-5/6 flex justify-center items-center"> <!-- Updated classes here -->
                    <img src="{{ asset('images/KeyboardMockUp3.png') }}" class="h-4/6">
                </div>
            </div>
            <div class="w-full flex flex-col items-center mb-6">
                <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT ASSEMBLY</h1>
                <div class="flex space-x-2">
                    @foreach($assembliesAvailable as $assembly)
                    <input type="radio" id="{{ $assembly->name }}" wire:model="assembly_id" value="{{ $assembly->id }}" class="hidden" required />
                    <label for="{{ $assembly->name }}" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700">
                        <div class="block">
                            <div class="text-lg font-archivo text-transparent font-outline-1 hover:text-black md:text-xl lg:text-2xl">{{ $assembly->name }}</div>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>
            <div class="w-5/6 flex justify-between items-center md:px-20">
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="previousStep()">BACK</button>
                <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl" wire:click="orderStep()">NEXT</button>
            </div>
            @elseif($currentStep === 6)
            <h1 class="font-archivo text-black text-lg mb-2 text-center transition ease-in md:text-xl lg:text-2xl">ORDER DETAILS</h1>
            <h1 class="font-archivo text-transparent font-outline-1 text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">GET MORE UPDATES</h1>
            <input type="email" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700 mb-2" placeholder="johndoe@example.com">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"">PAY</button>
            @elseif($currentStep === 7)
            <h1 class="font-archivo text-black text-lg mb-2 text-center transition ease-in md:text-xl lg:text-2xl">SORRY, CURRENTLY WE'RE ON PROTOTYPE</h1>
            <h1 class="font-archivo text-transparent font-outline-1 text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">GET MORE UPDATES</h1>
            <input type="email" class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700 mb-2" placeholder="johndoe@example.com">
            <button class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"">SUBSCRIBE</button>
            @endif
        </form>
    </div>
</div>
