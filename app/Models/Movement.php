<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id', 'client_id', 'cost', 'recipe'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }
}
