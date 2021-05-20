@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Editar datos de la venta </span>
                    <a href="/ventas" class="btn btn-warning btn-sm">Volver a lista de ventas...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="{{ url('/ventas/'.$venta->id) }}" enctype="multipart/form-data">                   
                  
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <input
                      type="text"
                      name="producto"
                      placeholder="Producto"
                      class="form-control mb-2"
                      value="{{$venta->producto}}"
                    />
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                      value="{{$venta->descripcion}}"
                    />
                    <input
                      type="number"
                      name="precio"
                      placeholder="Precio"
                      class="form-control mb-2"
                      step="0.01"
                      value="{{$venta->precio}}"
                    />
                    <input
                      type="number"
                      name="cantidad"
                      placeholder="Cantidad"
                      class="form-control mb-2"
                      value="{{$venta->cantidad}}"
                    />
                        <input type="submit" value="Editar" class="btn btn-primary btn-block" onclick="return confirm('¿Editar registro de venta?');" >                 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection