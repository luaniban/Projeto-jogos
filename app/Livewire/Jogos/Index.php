<?php

namespace App\Livewire\Jogos;

use Livewire\Component;
use App\Models\Coletion;
use Livewire\Attributes\On;
use App\Providers\ApiService;
use Illuminate\Support\Facades\Http;

class Index extends Component
{

    public $modal = true;
    public $allColetions;



    public function closeModal() {
        $this->modal = false;
    }
    public function mount() {
        $this->allColetions = Coletion::all();
    }



    #[On('dispatch-create')]
    #[On('dispatch-edit')]
    public function render()
    {
        return view('livewire.jogos.index');
    }
}
