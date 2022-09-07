<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imc extends Model
{
    public static function calcular(float $peso, float $altura) {
        return $peso / pow($altura, 2);
    }
}
