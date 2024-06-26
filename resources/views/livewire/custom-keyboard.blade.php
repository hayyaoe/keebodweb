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
            @if ($currentStep !== 1 && $currentStep !== 8)
                <div class="w-4/6 h-4 px-1 border border-black place-content-center mb-4">
                    <div class="w-1/2 h-1 bg-black p-1" role="progressbar"
                        style="width: {{ $currentStep == 7 ? 100 : (($currentStep - 1) / 6) * 100 }}%;"></div>
                </div>
            @endif
            @if ($currentStep !== 1 && $currentStep !== 7 && $currentStep !== 8)
                <div class="w-full h-3/6 flex flex-col items-center">
                    <h1
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in md:text-xl lg:text-2xl">
                        PREVIEW</h1>
                    <div class="mx-10 my-2 border border-black w-5/6 md:w-4/6 h-5/6 flex justify-center items-center">
                        @if ($selectedCaseType == '' || $selectedCaseType->name == 'ALU')
                            <img src="{{ asset('images/SilverCase.png') }}" class="w-8/12 absolute md:w-6/12">
                        @elseif($selectedCaseType->name == 'ACRYBLK')
                            <img src="{{ asset('images/BlackCase.png') }}" class="w-8/12 absolute md:v6/12">
                        @elseif($selectedCaseType->name == 'ACRYWHT')
                            <img src="{{ asset('images/WhiteCase.png') }}" class="w-8/12 absolute md:w-6/12">
                        @endif
                        @if ($selectedKeyswitch != '')
                            @if ($selectedKeyswitch->name == 'ALPACCA')
                                <img src="{{ asset('images/RedSwitch.png') }}" class="w-8/12 absolute md:w-6/12">
                            @elseif($selectedKeyswitch->name == 'CS-AIR')
                                <img src="{{ asset('images/YellowSwitch.png') }}" class="w-8/12 absolute md:w-6/12">
                            @elseif($selectedKeyswitch->name == 'BOBA U4T')
                                <img src="{{ asset('images/BlueSwitch.png') }}" class="w-8/12 absolute md:w-6/12">
                            @endif
                        @endif
                        @if ($selectedKeycaps != '')
                            @if ($selectedKeycaps->name == 'SAMURAI')
                                <img src="{{ asset('images/RedCaps.png') }}" class="w-8/12 absolute md:w-6/12">
                            @elseif($selectedKeycaps->name == 'APPLE')
                                <img src="{{ asset('images/WhiteCaps.png') }}" class="w-8/12 absolute md:w-6/12">
                            @elseif($selectedKeycaps->name == 'OLIVIA')
                                <img src="{{ asset('images/GreenCaps.png') }}" class="w-8/12 absolute md:w-6/12">
                            @endif
                        @endif
                    </div>
                </div>
            @endif
            @if ($currentStep === 1)
                <div class="w-full flex flex-col items-center mb-6">
                    <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT
                        KEYBOARD TYPE</h1>
                    <div class="flex space-x-2">
                        <ul class="w-full flex flex-row gap-1">
                            @foreach ($typesAvailable as $type)
                                <li class="group relative">
                                    <input type="radio" id="{{ $type->name }}" wire:model="type_id"
                                        value="{{ $type->id }}" class="hidden peer sr-only" required />
                                    <label for="{{ $type->name }}"
                                        class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 hover:text-black peer-checked:text-black peer-checked:line-through">
                                        <img src="{{ asset('images/60icon.png') }}">
                                        <div class="block">
                                            <div class="text-lg font-archivo md:text-xl lg:text-2xl">
                                                {{ $type->name }}</div>
                                        </div>
                                    </label>
                                    <div
                                        class="absolute left-0 mt-2 w-40 p-2 bg-white border border-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <p>{{ $type->description }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="font-archivo text-red-600">
                        @error('type_id')
                            REQUIRED SELECT TYPE
                        @enderror
                    </div>
                </div>
                <div class="w-5/6 flex justify-end md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="caseTypeStep()">NEXT</button>
                </div>
            @elseif($currentStep === 2)
                <div class="w-full flex flex-col items-center mb-6">
                    <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT
                        CASE TYPE</h1>
                    <div class="flex space-x-2">
                        <ul class="w-full flex flex-row gap-1">
                            @foreach ($caseTypesAvailable as $caseType)
                                <li class="group relative">
                                    <input type="radio" id="{{ $caseType->name }}" wire:model="case_type_id"
                                        value="{{ $caseType->id }}" class="hidden peer sr-only" required />
                                    <label for="{{ $caseType->name }}"
                                        class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 hover:text-black peer-checked:text-black peer-checked:line-through"
                                        wire:click="selectCaseType()">
                                        <div class="block">
                                            <div class="text-lg font-archivo md:text-xl lg:text-2xl">
                                                {{ $caseType->name }}</div>
                                        </div>
                                    </label>
                                    <div
                                        class="absolute left-0 mt-2 w-40 p-2 bg-white border border-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <p>{{ $caseType->description }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="font-archivo text-red-600">
                        @error('case_type_id')
                            REQUIRED SELECT CASE TYPE
                        @enderror
                    </div>
                </div>
                <div class="w-5/6 flex justify-between items-center md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="previousStep()">BACK</button>
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="switchStep()">NEXT</button>
                </div>
            @elseif($currentStep === 3)
                <div class="w-full flex flex-col items-center mb-6">
                    <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl ">SELECT
                        SWITCH</h1>
                    <div class="flex space-x-2">
                        <ul class="w-full flex flex-row gap-1">
                            @foreach ($switchesAvailable as $switchy)
                                <li class="group relative">
                                    <input type="radio" id="{{ $switchy->name }}" wire:model="keyswitch_id"
                                        value="{{ $switchy->id }}" class="hidden peer" name="switches" required />
                                    <label for="{{ $switchy->name }}"
                                        class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through"
                                        wire:click="selectSwitch()">
                                        {{ $switchy->name }}
                                    </label>
                                    <div
                                        class="absolute left-0 mt-2 w-40 p-2 bg-white border border-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <p>{{ $switchy->description }}</p>
                                    </div>
                                <li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="font-archivo text-red-600">
                        @error('keyswitch_id')
                            REQUIRED SELECT SWITCH
                        @enderror
                    </div>
                </div>
                <div class="w-5/6 flex justify-between items-center md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="previousStep()">BACK</button>
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="keycapsStep()">NEXT</button>
                </div>
            @elseif($currentStep === 4)
                <div class="w-full flex flex-col items-center mb-6">
                    <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl ">SELECT
                        KEYCAPS</h1>
                    <div class="flex space-x-2">
                        <ul class="w-full flex flex-row gap-1">
                            @foreach ($keycapsAvailable as $keycap)
                                <li class="group relative">
                                    <input type="radio" id="{{ $keycap->name }}" wire:model="keycap_id"
                                        value="{{ $keycap->id }}" class="hidden peer" name="keycap" required />
                                    <label for="{{ $keycap->name }}"
                                        class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through "
                                        wire:click="selectKeycaps()">
                                        {{ $keycap->name }}
                                    </label>
                                    <div
                                        class="absolute left-0 mt-2 w-40 p-2 bg-white border border-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <p>{{ $keycap->description }}</p>
                                    </div>
                                <li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="font-archivo text-red-600">
                        @error('keycap_id')
                            REQUIRED SELECT KEYCAPS
                        @enderror
                    </div>
                </div>
                <div class="w-5/6 flex justify-between items-center md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="previousStep()">BACK</button>
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="connectionStep()">NEXT</button>
                </div>
            @elseif($currentStep === 5)
                <div class="w-full flex flex-col items-center mb-6">
                    <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT
                        CONNECTION</h1>
                    <div class="flex space-x-2">
                        <ul class="w-full flex flex-row gap-1">
                            @foreach ($connectionsAvailable as $connection)
                                <li class="group relative">
                                    <input type="radio" id="{{ $connection->name }}" wire:model="connection_id"
                                        value="{{ $connection->id }}" class="hidden peer" name="connection"
                                        required />
                                    <label for="{{ $connection->name }}"
                                        class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                        {{ $connection->name }}
                                    </label>
                                    <div
                                        class="absolute left-0 mt-2 w-40 p-2 bg-white border border-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <p>{{ $connection->description }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="font-archivo text-red-600">
                        @error('connection_id')
                            REQUIRED SELECT CONNECTION
                        @enderror
                    </div>
                </div>
                <div class="w-5/6 flex justify-between items-center md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="previousStep()">BACK</button>
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="assemblyStep()">NEXT</button>
                </div>
            @elseif($currentStep === 6)
                <div class="w-full flex flex-col items-center mb-6">
                    <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SELECT
                        ASSEMBLY</h1>
                    <div class="flex space-x-2">
                        <ul class="w-full flex flex-row gap-1">
                            @foreach ($assembliesAvailable as $assembly)
                                <li class="group relative">
                                    <input type="radio" id="{{ $assembly->name }}" wire:model="assembly_id"
                                        value="{{ $assembly->id }}" class="hidden peer" name="assembly" required />
                                    <label for="{{ $assembly->name }}"
                                        class="inline-flex items-center justify-between p-2 border border-black cursor-pointer text-transparent font-outline-1 text-lg font-archivo md:text-xl lg:text-2xl hover:text-black peer-checked:text-black peer-checked:line-through">
                                        {{ $assembly->name }}
                                    </label>
                                    <div
                                        class="absolute left-0 mt-2 w-40 p-2 bg-white border border-black rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <p>{{ $assembly->description }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="font-archivo text-red-600">
                        @error('assembly_id')
                            REQUIRED SELECT ASSEMBLY
                        @enderror
                    </div>
                </div>
                <div class="w-5/6 flex justify-between items-center md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="previousStep()">BACK</button>
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="orderDetailStep()">NEXT</button>
                </div>
            @elseif($currentStep === 7)
                <h1 class="font-archivo text-black text-lg mb-2 text-center transition ease-in md:text-xl lg:text-2xl">
                    ORDER DETAILS</h1>
                <div class="grid grid-cols-2 p-4 border border-black mb-2">
                    @if ($selectedType != '')
                        <h1
                            class="font-archivo text-black text-lg text-left transition ease-in md:text-lg lg:text-xl col-span-2">
                            Keyboard Type:</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                            {{ $selectedType->name }}</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-right transition ease-in md:text-lg lg:text-xl">
                            Rp. {{ $selectedType->price }}</h1>
                    @endif
                    @if ($selectedCaseType != '')
                        <h1
                            class="font-archivo text-black text-lg text-left transition ease-in md:text-lg lg:text-xl col-span-2">
                            Case Type:</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                            {{ $selectedCaseType->name }}</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-right transition ease-in md:text-lg lg:text-xl">
                            Rp. {{ $selectedCaseType->price }}</h1>
                    @endif
                    @if ($selectedKeyswitch != '' && $selectedType != '')
                        <h1
                            class="font-archivo text-black text-lg text-left transition ease-in md:text-lg lg:text-xl col-span-2">
                            Switch:</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                            {{ $selectedKeyswitch->name }}</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-rigth transition ease-in md:text-lg lg:text-xl">
                            Rp. {{ $selectedKeyswitch->price }}x{{ $selectedType->keys }}</h1>
                    @endif
                    @if ($selectedKeycaps != '')
                        <h1
                            class="font-archivo text-black text-lg text-left transition ease-in md:text-lg lg:text-xl col-span-2">
                            Keycaps:</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                            {{ $selectedKeycaps->name }}</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-right transition ease-in md:text-lg lg:text-xl">
                            Rp. {{ $selectedKeycaps->price }}</h1>
                    @endif
                    @if ($selectedConnection != '')
                        <h1
                            class="font-archivo text-black text-lg text-left transition ease-in md:text-lg lg:text-xl col-span-2">
                            Connection:</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                            {{ $selectedConnection->name }}</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-right transition ease-in md:text-lg lg:text-xl">
                            Rp. {{ $selectedConnection->price }}</h1>
                    @endif
                    @if ($selectedAssembly != '')
                        <h1
                            class="font-archivo text-black text-lg text-left transition ease-in md:text-lg lg:text-xl col-span-2">
                            Assembly:</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                            {{ $selectedAssembly->name }}</h1>
                        <h1
                            class="font-archivo text-black text-lg mb-2 text-right transition ease-in md:text-lg lg:text-xl">
                            Rp. {{ $selectedAssembly->price }}</h1>
                    @endif
                    <div class="border-t-2 border-black w-full col-span-2"></div>
                    <h1
                        class="font-archivo text-black text-lg mb-2 text-left transition ease-in md:text-lg lg:text-xl">
                        Total</h1>
                    <h1
                        class="font-archivo text-black text-lg mb-2 text-right transition ease-in md:text-lg lg:text-xl">
                        Rp. {{ $total }}</h1>
                </div>
                <div class="flex items-center mb-4">
                    <input checked id="checked-checkbox" type="checkbox" wire:model="confirmorder" value="true"
                        class="w-4 h-4 text-black bg-black border-gray-black focus:ring-gray-400 focus:ring-1">
                    <label for="checked-checkbox" class="ms-2 text-sm font-medium text-black">Accept Terms &
                        Conditions</label>
                </div>
                <div class="w-5/6 flex justify-between items-center md:px-20">
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        wire:click="previousStep()">BACK</button>
                    <button
                        class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                        type="submit">ADD TO CART</button>
                </div>
            @elseif($currentStep === 8)
                <h1 class="font-archivo text-black text-lg mb-2 text-center transition ease-in md:text-xl lg:text-2xl">
                    SORRY, CURRENTLY WE'RE ON PROTOTYPE</h1>
                <h1 class="font-archivo text-black text-lg mb-2 transition ease-in md:text-xl lg:text-2xl">SUBSCRIBE TO
                    GET MORE UPDATES</h1>
                <input type="email"
                    class="inline-flex items-center justify-between p-2 border border-black cursor-pointer hover:text-gray-700 mb-2"
                    wire:model="email" placeholder="johndoe@example.com">
                <button
                    class="font-archivo text-transparent font-outline-1 text-lg transition ease-in hover:text-black hover:font-outline-none hover:line-through md:text-xl lg:text-2xl xl:text-3xl"
                    wire:click="subscribe()">SUBSCRIBE</button>
            @endif

            @if ($currentStep !== 1 && $currentStep !== 7 && $currentStep !== 8)
                <div class="fixed bottom-0 md:bottom-auto md:right-8 flex flex-col">
                    <div id="items-list"
                        class="bg-[#E8F4FA] -md:hidden md:grid grid-cols-2 p-4 border border-black my-2">
                        <h1
                            class="font-archivo text-black text-sm text-center md:mb-2 transition ease-in md:text-md lg:text-md col-span-2">
                            ITEMS</h1>
                        @if ($selectedType != '')
                            <h1
                                class="font-archivo text-black text-sm text-left transition ease-in md:text-md lg:text-md col-span-2">
                                Keyboard Type:</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-left transition ease-in md:text-md">
                                {{ $selectedType->name }}</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-right transition ease-in md:text-md">
                                Rp. {{ $selectedType->price }}</h1>
                        @endif
                        @if ($selectedCaseType != '')
                            <h1
                                class="font-archivo text-black text-sm text-left transition ease-in md:text-md lg:text-md col-span-2">
                                Case Type:</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-left transition ease-in md:text-md">
                                {{ $selectedCaseType->name }}</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-right transition ease-in md:text-md">
                                Rp. {{ $selectedCaseType->price }}</h1>
                        @endif
                        @if ($selectedKeyswitch != '' && $selectedType != '')
                            <h1
                                class="font-archivo text-black text-sm text-left transition ease-in md:text-md lg:text-md col-span-2">
                                Switch:</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-left transition ease-in md:text-md">
                                {{ $selectedKeyswitch->name }}</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-rigth transition ease-in md:text-md">
                                Rp. {{ $selectedKeyswitch->price }}x{{ $selectedType->keys }}</h1>
                        @endif
                        @if ($selectedKeycaps != '')
                            <h1
                                class="font-archivo text-black text-sm text-left transition ease-in md:text-md lg:text-md col-span-2">
                                Keycaps:</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-left transition ease-in md:text-md">
                                {{ $selectedKeycaps->name }}</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-right transition ease-in md:text-md">
                                Rp. {{ $selectedKeycaps->price }}</h1>
                        @endif
                        @if ($selectedConnection != '')
                            <h1
                                class="font-archivo text-black text-sm text-left transition ease-in md:text-md lg:text-md col-span-2">
                                Connection:</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-left transition ease-in md:text-md">
                                {{ $selectedConnection->name }}</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-right transition ease-in md:text-md">
                                Rp. {{ $selectedConnection->price }}</h1>
                        @endif
                        @if ($selectedAssembly != '')
                            <h1
                                class="font-archivo text-black text-sm text-left transition ease-in md:text-md lg:text-md col-span-2">
                                Assembly:</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-left transition ease-in md:text-md">
                                {{ $selectedAssembly->name }}</h1>
                            <h1 class="font-archivo text-black text-sm mb-2 text-right transition ease-in md:text-md">
                                Rp. {{ $selectedAssembly->price }}</h1>
                        @endif
                        @if ($total != '')
                            <div class="border-t-2 border-black w-full col-span-2"></div>
                            <h1 class="font-archivo text-black text-xs mb-2 text-left transition ease-in md:text-md">
                                Total</h1>
                            <h1 class="font-archivo text-black text-xs mb-2 text-right transition ease-in md:text-md">
                                Rp. {{ $total }}</h1>
                        @endif
                    </div>
                    <span class="cursor-pointer mt-1 mx-4 mb-10 block md:hidden">
                        <h1 name="items"
                            class="font-archivo text-black text-md text-center text-transparent font-outline-1 md:text-md lg:text-md col-span-2 transition ease-in hover:text-black hover:font-outline-none hover:line-through"
                            onclick="ItemsList(this)">SELECED ITEMS</h1>
                    </span>
                </div>
            @endif
        </form>
    </div>
</div>
