<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    /**
     * Таблица БД, ассоциированная с моделью
     *
     * @var string
     */
    protected $table = 'buyers';

    protected $fillable = [
        'name', 'blocked','surname', 'phone', 'email','registration',
    ];

    /**
     * Получить адресса покупателя
     */
    public function adresses()
    {
        return $this->hasMany(Adress::class, 'buyer_id');
    }
}
