<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignUp extends Component
{
    public $name;
    public $email;
    public $password;

    public function signUp()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('success', 'Account created successfully');
        return redirect()->to('/signin'); // Change the redirect path as needed
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}