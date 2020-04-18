@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Propiedas publicadas en InmobiliariaXavi</div>

                <div class="card-body">
                    @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                    @else
                        <div>Acceso usuario</div>
                    @endif
                        <table class="table">
                            <tr>
                                <th>Id</th><th>Nombre</th><th>Descripcion</th><th>Precio</th><th>Foto</th>
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
                                    </td>
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
