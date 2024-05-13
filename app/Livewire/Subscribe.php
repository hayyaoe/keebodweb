<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Subscribe as ModelSubscribe;

#[Layout("layouts.livewirelayout")]
class Subscribe extends Component
{
    public $email;

    public function render()
    {
        return view("livewire.subscribe");
    }

    public function subscribe()
    {
        $data = $this->validate([
            "email" => "required|email",
        ]);

        redirect()->route("home");

        ModelSubscribe::create($data);
    }
}
