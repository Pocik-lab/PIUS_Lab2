<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    /**
     * Таблица БД, ассоциированная с моделью
     * 
     * @var string
     */
    protected $table = 'buyers';

    protected $fillable = [
        'name', 'blocked','surname', 'phone', 'email','registration',
    ];
}
