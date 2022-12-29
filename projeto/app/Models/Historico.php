<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["texto",];

    protected $attributes = [
        'delayed' => false,
    ];
}
