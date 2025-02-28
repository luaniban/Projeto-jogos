<?php

namespace App\Livewire\Jogos;

use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;
    public $img;



    public $modalCreate = false;


    public function openModalCreate() {
        $this->modalCreate = true;
    }

    public function closeModalCreate() {
        $this->modalCreate = false;
    }


    public function create() {
        
    }


    public function render()
    {
        return view('livewire.jogos.create');
    }
}
