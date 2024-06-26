<?php

namespace App\Livewire;

use App\Models\CustomOrder;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

use Illuminate\Support\Facades\Auth;

#[Layout("layouts.livewirelayout")]
#[Title("Custom KeeBod")]
class Cart extends Component
{
    public $customOrders;
    private $user;
    public $prices = [];
    public $shipping = 0;
    public $tax = 0;
    public $subtotal = 0;
    public $total = 0;

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
    }

    public function removeOrder($orderId)
    {
        $customOrder = CustomOrder::findOrFail($orderId);
        $customOrder->delete();

        return redirect()->route("cart");
    }

    public function render()
    {
        return view("livewire.cart");
    }
}
