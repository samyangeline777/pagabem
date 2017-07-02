<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_Conta extends Model
{

    protected $table = "tipo_contas";
    
    protected $fillable = ['nome']; //campos a adicionar
    // protected $guarded = ['dsa']; // campos a não adicionar
}
