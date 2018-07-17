<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Campos que podem ser preenchiveis (Laravel possui trava por padrão):
    protected $fillable = ['name', 'birthdate', 'special_customer', 'city', 'state'];

    // Fazendo o cast de 0 e 1 para booleano:
    protected $casts = [
        // 'Nome da coluna' => 'tipo':
        'special_customer' => 'boolean',
        'birthdate' => 'date'
    ];

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
