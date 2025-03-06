<?php

namespace App\Livewire\Jogos;

use Livewire\Component;

class Edit extends Component
{

    public $modal = false;

    public function openModal() {
        $this->modal = true;
    }

    public function closeModal() {
        $this->modal = false;
    }
    public function render()
    {
        return view('livewire.jogos.edit');
    }
}
