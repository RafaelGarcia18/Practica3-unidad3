@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Agregar venta: </span>
                    <a href="/ventas" class="btn btn-warning btn-sm">Volver a lista de ventas...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form method="POST" action="/ventas">
                    @csrf
                    <input
                      type="text"
                      name="producto"
                      placeholder="Producto"
                      class="form-control mb-2"
                   />          
                       
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                    />
                    <input
                      type="number"
                      name="precio"
                      placeholder="Precio"
                      class="form-control mb-2"
                      step="0.01"
                    />
                    <input
                      type="number"
                      name="cantidad"
                      placeholder="Cantidad"
                      class="form-control mb-2"
                    />
                      <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection