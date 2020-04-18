@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar nueva propiedad</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('admin.inmobiliarias.store')}}">
                    @csrf
                    Nombre:
                    <input type="text" name="name" class="form-control" required/>
                        <br/><br/>
                        Descripción

                        <input type="text" name="description" class="form-control" required/>

                        Precio

                        <input type="number" name="price" class="form-control" required/>

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
                        <input type="file" name="photo" required>

                        <br/><br/>
                        <input type="submit" value="Guardar" class="btn btn-primary"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
