<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\City;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout("layouts.livewirelayout")]
#[Title("Custom KeeBod")]

class Ongkir extends Component
{
    public $customOrders;
    public $user;
    public $prices = [];
    public $shipping = 0;
    public $tax = 0;
    public $subtotal = 0;
    public $total = 0;

    public $cities;
    public $ongkir;
    public $originCity;
    public $destinationCity;
    public $destination;
    public $courier;

    public function mount()
    {
        $this->user = Auth::user();
        $this->customOrders = $this->user->customOrders;
        foreach ($this->customOrders as $customOrder) {
            $price =
                $customOrder->type->price +
                $customOrder->caseType->price +
                $customOrder->keyswitch->price +
                $customOrder->keycap->price +
                $customOrder->connection->price +
                $customOrder->assembly->price;

            $this->tax += $price * 0.1;
            // $this->shipping += $price * 0.3;

            $this->subtotal += $price;
            $this->prices[] = $price;
        }

        $this->total = $this->tax + $this->shipping + $this->subtotal;

        // Initialize city listing and shipping cost variables
        $this->cities = City::all();
        $this->ongkir = '';
    }

    public function cekOngkir()
    {
        $originCity = City::find(444)->name;
        $destinationCity = City::find($this->destination)->name;

        $responseCost = Http::withHeaders([
            'key' => 'b38a1d53265650ebcdb3ec985fdab977'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin' => 444,
            'destination' => $this->destination,
            'weight' => 1000,
            'courier' => $this->courier,
        ]);

        $this->ongkir = $responseCost['rajaongkir'];
        $this->originCity = $originCity;
        $this->destinationCity = $destinationCity;
    }

    public function render()
    {
        return view('livewire.ongkir');
    }
}
