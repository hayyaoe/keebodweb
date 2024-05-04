<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("layouts.livewirelayout")]
#[Title("Custom KeeBod")]
class CustomKeyboard extends Component
{
    public $currentStep = 1;
    public $totalSteps = 11;
    public $type;
    public $case_material;
    public $switch;
    public $keycaps;
    public $accent_keycaps;
    public $switch_lubrication;
    public $stabilizers;
    public $connection;
    public $mounting_type;
    public $assembly;

    public function render()
    {
        return view("livewire.custom-keyboard");
    }

    public function previousStep()
    {
        $this->currentStep--;
    }

    public function caseMaterialStep()
    {
        $this->validate([
            "type" => "required",
        ]);

        $this->currentStep = 2;
    }

    public function switchStep()
    {
        $this->validate([
            "case_material" => "required",
        ]);

        $this->currentStep = 3;
    }

    public function keycapsStep()
    {
        $this->validate([
            "switch" => "required",
        ]);

        $this->currentStep = 4;
    }

    public function accentKeycapsStep()
    {
        $this->validate([
            "keycaps" => "required",
        ]);

        $this->currentStep = 5;
    }

    public function switchLubricationStep()
    {
        $this->validate([
            "accent_keycaps" => "required",
        ]);

        $this->currentStep = 6;
    }

    public function stabilizersStep()
    {
        $this->validate([
            "switch_lubrication" => "required",
        ]);

        $this->currentStep = 7;
    }

    public function connectionStep()
    {
        $this->validate([
            "stabilizers" => "required",
        ]);

        $this->currentStep = 8;
    }

    public function mountingTypeStep()
    {
        $this->validate([
            "connection" => "required",
        ]);

        $this->currentStep = 9;
    }

    public function assemblyStep()
    {
        $this->validate([
            "mounting_type" => "required",
        ]);

        $this->currentStep = 10;
    }

    public function orderStep()
    {
        $this->validate([
            "assembly" => "required",
        ]);

        $this->currentStep = 11;
    }
}
