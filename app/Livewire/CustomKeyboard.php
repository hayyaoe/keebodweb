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

    public function caseMaterial()
    {
        // $this->validate([
        //     "type" => "required",
        // ]);

        $this->currentStep = 2;
    }

    public function switch()
    {
        // $this->validate([
        //     "case_material" => "required",
        // ]);

        $this->currentStep = 3;
    }

    public function keycaps()
    {
        // $this->validate([
        //     "switch" => "required",
        // ]);

        $this->currentStep = 4;
    }

    public function accentKeycaps()
    {
        // $this->validate([
        //     "keycaps" => "required",
        // ]);

        $this->currentStep = 5;
    }

    public function switch_lubrication()
    {
        // $this->validate([
        //     "accent_keycaps" => "required",
        // ]);

        $this->currentStep = 6;
    }

    public function stabilizers()
    {
        // $this->validate([
        //     "switch_lubrication" => "required",
        // ]);

        $this->currentStep = 7;
    }

    public function connection()
    {
        // $this->validate([
        //     "stabilizers" => "required",
        // ]);

        $this->currentStep = 8;
    }

    public function mountingType()
    {
        // $this->validate([
        //     "connection" => "required",
        // ]);

        $this->currentStep = 9;
    }

    public function assembly()
    {
        // $this->validate([
        //     "mounting_type" => "required",
        // ]);

        $this->currentStep = 10;
    }

    public function order()
    {
        // $this->validate([
        //     "assembly" => "required",
        // ]);

        $this->currentStep = 11;
    }
}
