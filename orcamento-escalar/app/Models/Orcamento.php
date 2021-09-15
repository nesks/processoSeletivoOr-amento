<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;


    protected $fillable=['nome_cliente' ,  'instalacao', 'forma_pagamento', 'quant_licencas'];


    public function tvs(){
        return $this->hasMany(Tv::class);
    }

    public function players(){
        return $this->hasMany(Player::class);
    }

    public function planos(){
        return $this->hasMany(Plano::class);
    }
}
