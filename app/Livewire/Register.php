<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

#[Layout("layouts.livewirelayout")]
#[Title("Register")]
class Register extends Component
{
    public $email;
    public $name;
    public $password;

    public function render()
    {
        return view("livewire.register");
    }

    public function register()
    {
        $this->validate([
            "name" => "required|string|max:255",
            "email" => "required|string|email|unique:users|max:255",
            "password" => "required|string|min:8",
        ]);

        $user = User::create([
            "name" => $this->name,
            "email" => $this->email,
            "password" => Hash::make($this->password),
        ]);

        return redirect()->route("login");
    }
}
