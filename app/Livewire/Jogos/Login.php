<?php

namespace App\Livewire\Jogos;

use Livewire\Component;
use Livewire\Attributes\On;

class Login extends Component
{

    public $login = true;
    public $register = false;


    #[On("dispatch-register")]
    public function register() {
        $this->register = true;
        $this->login = false;
    }


    #[On("dispatch-login")]
    public function login() {
        $this->login = true;
        $this->register = false;
    }

    #[On("dispatch-home")]
    public function goToHome()
    {
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.jogos.login');
    }
}
