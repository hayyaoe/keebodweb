<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use App\Models\Assembly;
use App\Models\Connection;
use App\Models\CustomOrder;
use App\Models\Keycap;
use App\Models\KeySwitch;
use App\Models\Type;
use App\Models\CaseType;
use App\Models\Subscribe;

use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\confirm;

#[Layout("layouts.livewirelayout")]
#[Title("Custom KeeBod")]
class CustomKeyboard extends Component
{
    public $currentStep = 1;
    public $totalSteps = 8;
    public $user_id;
    public $type_id;
    public $case_type_id;
    public $keyswitch_id;
    public $keycap_id;
    public $connection_id;
    public $assembly_id;

    public $selectedType;
    public $selectedCaseType;
    public $selectedKeyswitch;
    public $selectedKeycaps;
    public $selectedConnection;
    public $selectedAssembly;

    public $typesAvailable;
    public $caseTypesAvailable;
    public $switchesAvailable;
    public $keycapsAvailable;
    public $connectionsAvailable;
    public $assembliesAvailable;

    public $confirmorder;
    public $total;

    public $email;

    public function mount()
    {
        $this->user_id = Auth::user()->id;
        $this->assembliesAvailable = Assembly::all();
        $this->switchesAvailable = KeySwitch::all();
        $this->keycapsAvailable = Keycap::all();
        $this->connectionsAvailable = Connection::all();
        $this->typesAvailable = Type::all();
        $this->caseTypesAvailable = CaseType::all();
    }

    public function render()
    {
        return view("livewire.custom-keyboard");
    }

    public function previousStep()
    {
        $this->confirmorder = null;
        $this->currentStep--;
    }

    public function caseTypeStep()
    {
        $this->validate([
            "type_id" => "required",
        ]);

        $this->selectedType = Type::findOrFail($this->type_id);

        $this->currentStep = 2;
    }

    public function switchStep()
    {
        $this->validate([
            "case_type_id" => "required",
        ]);

        $this->selectedCaseType = CaseType::findOrFail($this->case_type_id);

        $this->currentStep = 3;
    }

    public function keycapsStep()
    {
        $this->validate([
            "keyswitch_id" => "required",
        ]);

        $this->selectedKeyswitch = KeySwitch::findOrFail($this->keyswitch_id);

        $this->currentStep = 4;
    }

    public function connectionStep()
    {
        $this->validate([
            "keycap_id" => "required",
        ]);

        $this->selectedKeycaps = Keycap::findOrFail($this->keycap_id);

        $this->currentStep = 5;
    }

    public function assemblyStep()
    {
        $this->validate([
            "connection_id" => "required",
        ]);

        $this->selectedConnection = Connection::findOrFail(
            $this->connection_id
        );

        $this->currentStep = 6;
    }

    public function orderDetailStep()
    {
        $this->validate([
            "assembly_id" => "required",
        ]);

        $this->selectedAssembly = Assembly::findOrFail($this->assembly_id);

        $this->total =
            $this->selectedAssembly->price +
            $this->selectedConnection->price +
            $this->selectedKeycaps->price +
            $this->selectedKeyswitch->price * $this->selectedType->keys +
            $this->selectedType->price +
            $this->selectedCaseType->price;

        $this->currentStep = 7;
    }

    public function orderStep()
    {
        $this->validate([
            "confirmorder" => "required",
        ]);

        $data = $this->validate([
            "user_id" => "required",
            "type_id" => "required",
            "assembly_id" => "required",
            "keyswitch_id" => "required",
            "keycap_id" => "required",
            "connection_id" => "required",
            "case_type_id" => "required",
        ]);

        CustomOrder::create($data);
        $this->currentStep = 8;
    }

    public function subscribe()
    {
        $data = $this->validate([
            "email" => "required|email",
        ]);

        redirect()->route("home");

        Subscribe::create($data);
    }

    public function selectCaseType()
    {
        $this->selectedCaseType = CaseType::findOrFail($this->case_type_id);
    }

    public function selectSwitch()
    {
        $this->selectedKeyswitch = KeySwitch::findOrFail($this->keyswitch_id);
    }

    public function selectKeycaps()
    {
        $this->selectedKeycaps = Keycap::findOrFail($this->keycap_id);
    }
}
