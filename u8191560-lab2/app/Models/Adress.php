<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    /**
     * Таблица БД, ассоциированная с моделью
     *
     * @var string
     */
    protected $table = 'adresses';

    protected $fillable = [
        'adress_name', 'city','street', 'house', 'flat','code','add_time',
    ];

    /**
     * Получить покупателя, которому принадлежит адресс
     */
    public function buyer()
    {
        return $this->belongsTo(Buyer::class, 'buyer_id', 'id');
    }
}
