<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable = [
        'cantina',
        'etichetta',
        'vitigno',
        'anno',
        'descrizione',
        'prezzo'
    ];
}
