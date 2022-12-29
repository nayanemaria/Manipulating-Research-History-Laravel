<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["titulo",];

    protected $attributes = [
        'delayed' => false,
    ];
}
