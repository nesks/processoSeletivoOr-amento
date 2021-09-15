<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable=['quant','nome','valor','orcamento_id'];


    public function orcamento(){
        return $this->belongsTo(orcamento::class);
    }
}
