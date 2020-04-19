<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Multitenantable;



class Inmobiliaria extends Model
{
    protected $fillable = ['user_id','name', 'description', 'price', 'photo'];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    use Multitenantable;
}
