<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Define os campos que podem ser preenchidos no formulário

    protected $fillable = [
    'nome',
    'email',
    'telefone',
    'endereco',
    ];
}
