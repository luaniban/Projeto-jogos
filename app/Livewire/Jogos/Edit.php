<?php

namespace App\Livewire\Jogos;

use Livewire\Component;
use App\Models\Coletion;
use Livewire\Attributes\On;

class Edit extends Component
{

    public $name;
    public $description;
    public $coletionId;
    public $modal = false;


    public function openModal() {
        $this->modal = true;
    }

    public function closeModal() {
        $this->modal = false;
    }



    #[On('dispatch-modal-edit')]
    public function edit($id) {

        $this->openModal();


        $coletion = Coletion::find($id);

        $this->coletionId = $coletion->id;
        $this->name = $coletion->name;
        $this->description = $coletion->description;
    }

    public function save() {


        $coletion = Coletion::find($this->coletionId);

        $coletion->update([
            'name' => $this->name,
            'description' => $this->description
        ]);


        $this->closeModal();
        $this->dispatch('dispatch-edit');
    }




    public function render()
    {
        return view('livewire.jogos.edit');
    }
}
