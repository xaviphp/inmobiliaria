@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inmobiliarias</div>

                <div class="card-body">
                    <a href="{{route('admin.inmobiliarias.create')}}" class="btn btn-sm btn-primary">Añadir Nueva</a>
                    <br>
                   <table class="table">
                       <tr>
                           <th>Nombre</th>
                           <th></th>
                       </tr>
                       @forelse($inmobiliarias as $inmobiliaria)
                           <tr>
                               <td>{{$inmobiliaria->name}}</td>
                               <td><a href="{{route('admin.inmobiliarias.edit', $inmobiliaria->id)}}" class="btn btn-sm btn-info">Editar</a>
                               <form method="POST" action="{{route('admin.inmobiliarias.destroy', $inmobiliaria->id)}}">

                                   @csrf
                                   {{method_field('DELETE')}}
                                   <input type="submit" value="Delete" onclick="return confirm('estas seguro?')"
                                          class="btn btn-sm btn-danger"/>
                               </form>
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
