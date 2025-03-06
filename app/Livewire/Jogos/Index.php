<?php

namespace App\Livewire\Jogos;

use App\Models\Coletion;
use App\Providers\ApiService;
use Livewire\Component;
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
    public function render()
    {
        return view('livewire.jogos.index');
    }
}
