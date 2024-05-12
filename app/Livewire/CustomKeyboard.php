<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

use App\Models\Assembly;
use App\Models\Connection;
use App\Models\CustomOrder;
use App\Models\Keycap;
use App\Models\KeySwitch;
use App\Models\Type;

#[Layout("layouts.livewirelayout")]
#[Title("Custom KeeBod")]
class CustomKeyboard extends Component
{
    public $currentStep = 1;
    public $totalSteps = 7;
    public $user_id = 1;
    public $type_id;
    public $keyswitch_id;
    public $keycap_id;
    public $connection_id;
    public $assembly_id;

    public $typesAvailable;
    public $switchesAvailable;
    public $keycapsAvailable;
    public $connectionsAvailable;
    public $assembliesAvailable;

    public function mount()
    {
        $this->assembliesAvailable = Assembly::all();
        $this->switchesAvailable = KeySwitch::all();
        $this->keycapsAvailable = Keycap::all();
        $this->connectionsAvailable = Connection::all();
        $this->typesAvailable = Type::all();
    }

    public function render()
    {
        return view("livewire.custom-keyboard");
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function switchStep()
    {
        $this->validate([
            "type_id" => "required",
        ]);

        $this->currentStep = 2;
    }

    public function keycapsStep()
    {
        $this->validate([
            "keyswitch_id" => "required",
        ]);

        $this->currentStep = 3;
    }

    public function connectionStep()
    {
        $this->validate([
            "keycap_id" => "required",
        ]);

        $this->currentStep = 4;
    }

    public function assemblyStep()
    {
        $this->validate([
            "connection_id" => "required",
        ]);

        $this->currentStep = 5;
    }

    public function orderDetailStep()
    {
        $this->validate([
            "assembly_id" => "required",
        ]);

        $this->currentStep = 6;
    }

    public function orderStep()
    {
        $data = $this->validate([
            "user_id" => "required",
            "type_id" => "required",
            "assembly_id" => "required",
            "keyswitch_id" => "required",
            "keycap_id" => "required",
            "connection_id" => "required",
        ]);

        CustomOrder::create($data);

        $this->currentStep = 7;
    }
}
