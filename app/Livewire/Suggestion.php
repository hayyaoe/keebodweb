<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Suggestion as SuggestionModel;

class Suggestion extends Component
{
    public $name;
    public $email;
    public $suggestion;

    public $button = "SEND!";

    public function render()
    {
        return view("livewire.suggestion");
    }

    public function send()
    {
        $data = $this->validate([
            "name" => "required",
            "email" => "required|email",
            "suggestion" => "required",
        ]);

        SuggestionModel::create($data);

        $this->name = "";
        $this->email = "";
        $this->suggestion = "";

        $this->button = "SENT!";
    }
}
