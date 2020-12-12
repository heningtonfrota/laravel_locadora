<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate', 'color', 'model', 'year'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'movement', 'car_id', 'id');
    }

    public function movements()
    {
        return $this->belongsToMany(Movement::class);
    }
}
