<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    /**
     * Таблица БД, ассоциированная с моделью
     * 
     * @var string
     */
    protected $table = 'adresses';

    protected $fillable = [
        'adress_name', 'city','street', 'house', 'flat','code','add_time',
    ];
}
