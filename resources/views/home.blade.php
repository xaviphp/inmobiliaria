@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Propiedas publicadas en InmobiliariaXavi</div>

                <div class="card-body">

                        <table class="table">
                            <tr>
                                <th>Id</th><th>Nombre</th><th>Descripcion</th><th>Precio</th><th>Foto</th><th>Contacto</th>
                                <th></th>
                            </tr>
                            @forelse($inmobiliarias as $inmobiliaria)

                                <tr>
                                    <td>{{$inmobiliaria->id}}</td>
                                    <td>{{$inmobiliaria->name}}</td>
                                    <td>{{$inmobiliaria->description}}</td>
                                    <td>{{$inmobiliaria->price}}</td>
                                    <td>
                                        @if($inmobiliaria->photo!=null)<img src="{{asset('storage/'.$inmobiliaria->photo)}}" width="150px">@endif
                                    </td>
                                    <td>
                                        @if (Auth::check())
                                            {{$users[$inmobiliaria->user_id-1]['email']}}</td>
                                        @else Inicia Sesion para ver el contacto
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2">No se han encontrado propiedades.</td>
                                </tr>
                            @endforelse
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
