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

}
