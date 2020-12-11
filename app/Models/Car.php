<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movement;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'plate', 'color', 'model', 'year'
    ];

    public function movements()
    {
        return $this->belongsToMany(Movement::class);
    }
}
