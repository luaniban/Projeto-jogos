<?php

namespace App\Livewire\Jogos;

use App\Models\Jogo;
use Livewire\Component;
use App\Models\Coletion;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Providers\ApiService;
use Livewire\Attributes\Validate;
use Illuminate\Pagination\LengthAwarePaginator;

class Create extends Component
{
    public $name;
    public $description;
    public $img;
    public $display = 'hidden';
    public $all;
    public $descriptionAPI;
    public $titleAPI;
    public $idAPI;
    public $imgAPI;
    public $botaoAddJogo = true;
    public $ultimoRegistro;
    public $armezenaEmArray = [];
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


    #[On('dispatch-add-jogo')]
    public function addJogoOnDb($idAPI, $titleAPI, $descriptionAPI, $imgAPI) {

        $this->idAPI = $idAPI;
        $this->titleAPI = $titleAPI;
        $this->descriptionAPI = $descriptionAPI;
        $this->imgAPI = $imgAPI;

         Jogo::create([
            'title' => $this->titleAPI,
            'description' => $this->descriptionAPI,
            'image' => $this->imgAPI,
            'jogo_id' => $this->idAPI
        ]);



        $this->ultimoRegistro = Jogo::latest()->first();
        $this->armezenaEmArray[] = $this->ultimoRegistro->jogo_id;


        foreach(Jogo::all() as $jogo) {

            if($jogo->jogo_id == $this->ultimoRegistro->jogo_id && $jogo->id != $this->ultimoRegistro->id) {

                $this->ultimoRegistro->delete();
            }
        }




        $this->botaoAddJogo = false;




    }





    public function store() {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        $collection = Coletion::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        $collection->jogos()->attach($this->ultimoRegistro);

        $this->armezenaEmArray = [];

        $this->resetInputFields();
        $this->closeModal();
        $this->dispatch('dispatch-create');
       // dd($this->name);

    }


    public function render()
    {

        $this->all = ApiService::fetchAll();
        // $currentPage = $this->page ?? 1;
        // $currentItems = array_slice($this->all, ($currentPage - 1) * 3, 3);


        // $paginatedGames = new LengthAwarePaginator(
        //     $currentItems,
        //     count($this->all),
        //     3,
        //     $currentPage,
        //     ['path' => request()->url(), 'query' => request()->query()]
        // );

        return view('livewire.jogos.create');
    }
}
