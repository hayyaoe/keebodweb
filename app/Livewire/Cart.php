<?php

namespace App\Livewire;

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

    public function mount()
    {
        $this->user = Auth::user();
        $this->customOrders = $this->user->customOrders;
    }

    public function render()
    {
        return view("livewire.cart");
    }
}
