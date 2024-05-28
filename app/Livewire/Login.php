<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

#[Layout("layouts.livewirelayout")]
#[Title("Login")]
class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view("livewire.login");
    }

    public function login()
    {
        $this->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (
            Auth::attempt([
                "email" => $this->email,
                "password" => $this->password,
            ])
        ) {
            return redirect()->route("home");
        }

        $this->addError("email", "invalid email or password");
    }
}
