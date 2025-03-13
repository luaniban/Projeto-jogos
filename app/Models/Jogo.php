<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{

    protected $fillable = [
        'title',
        'description',
        'image',
        'jogo_id'
    ];


    public function coletions(){
        return $this->belongsToMany(Coletion::class);

    }

}
