<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'id_rezervacije';

    protected $fillable = [
        'id_uporabnika',
        'id_storitve',
        'id_avtoservis',
        'id_avtomobila',
        'termin',
        'dodatni_opis',
        'is_confirm'
    ];
}
