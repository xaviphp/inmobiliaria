<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmobiliaria extends Model
{
    protected $fillable = ['user_id','name', 'description', 'price', 'photo'];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
