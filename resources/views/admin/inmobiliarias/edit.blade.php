@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar propiedad</div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.inmobiliarias.update', $inmobiliaria->id)}}">
                        {{method_field('PUT')}}
                    @csrf
                    Nombre:
                    <input type="text" name="name" value="{{$inmobiliaria->name}}" class="form-control"/>
                        <br/><br/>
                        <input type="text" name="description" value="{{$inmobiliaria->description}}" class="form-control"/>
                        <br/><br/>
                        <input type="number" name="price" value="{{$inmobiliaria->price}}" class="form-control"/>
                        <br/><br/>

                        <input type="submit" value="Guardar" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
