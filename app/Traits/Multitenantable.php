<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 19/04/20
 * Time: 12:43
 */

namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;
use Request;


trait Multitenantable
{

    protected static function bootMultitenantable()
    {
        if(Request::is('admin/inmobiliarias')) {
            //si es la pagina mis propiedades uso el filtro para mostrar solo mis propiedades

        if (auth()->check()) {
            static::creating(function ($model) {
                $model->user_id = auth()->id();
            });

            // if user is not rol admin
            if (auth()->user()->hasRole('user')) {
                static::addGlobalScope('user_id', function (Builder $builder) {
                    $builder->where('user_id', auth()->id());
                });
            }}
        }
    }
}