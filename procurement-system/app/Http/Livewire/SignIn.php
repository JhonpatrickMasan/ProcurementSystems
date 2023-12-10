<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Redirect;

class SignIn extends Component
{
    public $email;
    public $password;

    public function signIn()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $this->reset(['email', 'password']);

            // Dispatch a custom Livewire event
            $this->dispatch('userLoggedIn');

            // Redirect to the dashboard
            return redirect()->to('/dashboard');
        } else {
            $this->addError('email', 'Invalid credentials');
        }
    }

    public function render()
    {
        return view('livewire.sign-in');
    }

    public function navigateToSignUp()
    {
        return redirect()->route('signup');
    }

    public function redirectToMainPage()
    {
        return redirect('/');
    }
}