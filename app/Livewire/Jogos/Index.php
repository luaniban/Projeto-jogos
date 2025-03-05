<?php

namespace App\Livewire\Jogos;

use App\Providers\ApiService;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Index extends Component
{

    public $modal = true;
    public $all;



    public function closeModal() {
        $this->modal = false;
    }
    public function mount() {
        $this->all = ApiService::fetchAll();
    
        //title, description
    }
    public function render()
    {
        return view('livewire.jogos.index');
    }
}
