@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar nueva propiedad</div>

                <div class="card-body">
                    <form method="POST" action="{{route('admin.inmobiliarias.store')}}">
                    @csrf
                    Nombre:
                    <input type="text" name="name" class="form-control"/>
                        <br/><br/>
                        Descripción

                        <input type="text" name="description" class="form-control"/>

                        Precio

                        <input type="number" name="price" class="form-control"/>

                        <br/><br/>
                        <input type="submit" value="Guardar" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
