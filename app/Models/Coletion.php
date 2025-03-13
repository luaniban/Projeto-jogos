<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coletion extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];





    public function jogos(){
        return $this->belongsToMany(Jogo::class);

    }


}
