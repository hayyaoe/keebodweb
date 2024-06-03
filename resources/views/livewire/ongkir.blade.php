<div class="h-screen w-screen">
    @include('components/topbar')
    <div class= "fixed flex h-full w-full items-center justify-center bg-gray-100 top-0 left-0">
        <div class="bg-white h-fit rounded-lg shadow-lg p-6 flex flex-col w-100">
            <!-- Cart Header -->
            <h2 class="text-2xl font-extrabold tracking-tight leading-none font-archivo mb-6">{{ Auth::user()->name }}'s
                Cart</h2>
            @if ($ongkir == '')
                <form wire:submit.prevent="cekOngkir">
                    <!-- Cart Summary -->
                    <div class="mt-6 p-6 bg-gray-50 rounded-lg shadow-sm">
                        <h3 class="text-lg font-semibold mb-6">Cek Ongkir</h3>

                        <div class="mb-4">
                            <label for="destination" class="block text-sm font-medium text-gray-700">Kota Tujuan *</label>

                            <select wire:model="destination" id="destination" name="state"
                                class="form-select mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="courier" class="block text-sm font-medium text-gray-700">Pilih Ekspedisi
                                *</label>
                            <select wire:model="courier" id="courier"
                                class="form-select mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                                <option value="">Pilih Ekspedisi</option>
                                <option value="jne">JNE</option>
                                <option value="pos">POS</option>
                                <option value="tiki">TIKI</option>
                            </select>
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="mt-6 inline-flex items-center bg-teal-400 justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-500 focus:ring-4 focus:ring-teal-800 dark:focus:ring-primary-900">
                                Cek Ongkir
                            </button>
                        </div>
                    </div>
                </form>
            @else
                {{-- <div class="bg-white h-fit rounded-lg shadow-lg p-6 flex flex-col w-100"> --}}
                <!-- Cart Header -->

                <div class="mt-6 p-4 bg-gray-50 rounded-lg shadow-sm">
                    <!-- Cart Items -->
                    <div class="space-y-4">
                        @foreach ($customOrders as $index => $customOrder)
                            <div class="flex items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                                <div class="ml-0 flex-1">
                                    <h3 class="text-lg font-semibold">{{ $customOrder->user->name }}'s Custom Keyboard
                                    </h3>
                                    <p class="text-gray-600 mb-2">{{ $customOrder->type->name }} |
                                        {{ $customOrder->caseType->name }} | {{ $customOrder->keyswitch->name }} |
                                        {{ $customOrder->keycap->name }} | {{ $customOrder->connection->name }} |
                                        {{ $customOrder->assembly->name }}</p>
                                    <div class="flex items-center justify-between">
                                        <p class="text-lg font-semibold">Rp
                                            {{ number_format($prices[$index], 0, ',', '.') }}</p>
                                        <button class="text-sm text-red-500 hover:underline">Remove</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                <!-- Cart Summary -->
                <div class="mt-6 p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold mb-4">Total Price</h3>

                    <div class="space-y-4">
                        <div class="flex justify-between mb-2 space-x-24">
                            <span class="text-gray-600">Origin</span>
                            <span class="text-gray-800">{{ $originCity }}</span>
                        </div>

                        <div class="flex justify-between mb-2 space-x-24">
                            <span class="text-gray-600">Destination</span>
                            <span class="text-gray-800">{{ $destinationCity }}</span>
                        </div>

                        {{-- <div class="flex justify-between mb-2 space-x-24">
                            <span class="text-gray-600">Shipping Cost</span>
                            <span class="text-gray-800">Rp{{ number_format($ongkir['results'][0]['costs'][0]['cost'][0]['value'], 0, ',', '.') }}</span>
                        </div> --}}

                        @php
                            $total = $total + $ongkir['results'][0]['costs'][0]['cost'][0]['value'];
                        @endphp

                        <div class="flex justify-between mb-2 space-x-24">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="text-gray-800">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2 space-x-24">
                            <span class="text-gray-600">Shipping</span>
                            <span class="text-gray-800">Rp
                                {{ number_format($ongkir['results'][0]['costs'][0]['cost'][0]['value'], 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between mb-2 space-x-24">
                            <span class="text-gray-600">Tax</span>
                            <span class="text-gray-800">Rp {{ number_format($tax, 0, ',', '.') }}</span>
                        </div>
                        <div class="flex justify-between font-semibold">
                            <span class="text-gray-800">Total</span>
                            <span class="text-gray-900">Rp {{ number_format($total, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('ongkir') }}"
                    class="mt-6 inline-flex items-center bg-teal-400 justify-center px-5 py-3 mr-3 text-base font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-teal-500 focus:ring-4 focus:ring-teal-800 dark:focus:ring-primary-900">
                    Proceed to Checkout
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            @endif
        </div>
    </div>
</div>

@assets
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
        integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endassets
@script
    <script>
        $(document).ready(function() {
            $('#destination').select2();
            $('#destination').on('change', function(event) {
                console.log(event.target.value);
                $wire.$set('destination', event.target.value)
            })
        });
    </script>
@endscript
