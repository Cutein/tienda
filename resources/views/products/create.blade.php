@extends('layouts.main')
@section('contenido')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear Productos
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input type="text" class="form-control" name="description">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Precio</label>
                                <input type="number" class="form-control" name="price">
                            </div>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="{{ route('products.index') }}" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection