<?php

namespace App\Livewire\Jogos;

use App\Providers\ApiService;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Index extends Component
{

    public $all;


    public function mount() {
        $this->all = ApiService::fetchAll();
        //dd($this->all);
    }
    public function render()
    {
        return view('livewire.jogos.index');
    }
}
