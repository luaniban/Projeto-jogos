<?php

namespace App\Livewire\Jogos;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Providers\ApiService;
use Illuminate\Pagination\LengthAwarePaginator;

class Create extends Component
{
    public $title;
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


    public function create() {

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
