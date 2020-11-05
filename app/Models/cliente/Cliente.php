<?php

namespace App\Models\cliente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome','endereco','email', 'telefone'];
    protected $guarded = ['id', 'created_at', 'update_at'];
}