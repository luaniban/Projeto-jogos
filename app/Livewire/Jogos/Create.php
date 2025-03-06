<?php

namespace App\Livewire\Jogos;

use App\Models\Coletion;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Providers\ApiService;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Validate;

class Create extends Component
{
    public $name;
    public $description;
    public $img;
    public $display = 'hidden';
    public $all;



    use WithPagination;


    public function openModal() {
        $this->display = 'flex';

    }

    public function closeModal() {
        $this->display = 'hidden';
    }

    private function resetInputFields() {
        $this->reset(['name', 'description']);

    }



    public function store() {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        Coletion::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        $this->resetInputFields();
        $this->closeModal();
       // dd($this->name);

    }


    public function render()
    {

        $this->all = ApiService::fetchAll();
        $currentPage = $this->page ?? 1;
        $currentItems = array_slice($this->all, ($currentPage - 1) * 3, 3);


        $paginatedGames = new LengthAwarePaginator(
            $currentItems,
            count($this->all),
            3,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('livewire.jogos.create', ['games' => $paginatedGames]);
    }
}
