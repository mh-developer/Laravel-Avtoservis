<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $primaryKey = 'id_avtomobila';

    protected $fillable = [
        'id_uporabnika',
        'znamka',
        'model',
        'leto_prve_registracije',
        'opis',
        'is_active'
    ];
}
