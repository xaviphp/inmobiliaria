<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmobiliaria extends Model
{
    protected $fillable = ['user_id','name', 'description', 'price'];

    public $timestamps = false;
}
