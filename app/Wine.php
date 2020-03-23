<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable = [
        'cantina',
        'produttore',
        'vitigno',
        'anno',
        'descrizione',
        'prezzo'
    ];
}
