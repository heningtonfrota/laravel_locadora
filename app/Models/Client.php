<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'cpf', 'name', 'mobile_phone', 'leased_quantity'
    ];

    public function cars()
    {
        return $this->belongsToMany(Car::class, 'movements');
    }
}
