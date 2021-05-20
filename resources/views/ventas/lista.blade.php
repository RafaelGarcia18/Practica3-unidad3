@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Lista de ventas para {{ auth()->user()->name }}</span>
                        <a href="/ventas/create" class="btn btn-primary btn-sm">Nueva Venta</a>
                    </div>
                    <div class="card-body">
                        @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                        <table class="table table-bordered table-hover">

                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Subtotal</th>    
                                    <th scope="col">Acción</th>                           
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->producto }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->cantidad }}</td>
                                        <td> ${{ $item->precio }}</td>
                                        <td> ${{ $item->precio * $item->cantidad }}</td>
                                        <td>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                             <form action="{{ url('/ventas/'.$item->id) }}" method="post" style="inline">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger me-md-2" type="submit" onclick="return confirm('¿Borrar?');">Eliminar</button>
                                            </form>
                                            <a class="btn btn-warning" href="{{ url('/ventas/'.$item->id).'/edit'}}">Editar</a>                                                                                 
                                           </div>                                                                              
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        {{-- fin card body --}}
                        {{ $ventas->links() }}
                    </div>
                </div>
            </div>
        </div> </p>
    
    <div class="container">
        <div class="row justify-content-center">
        <div class="card mb-8 border-dark"  style="max-width: 540px;">
            <div class="row g-0">             
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">Resumen de las ventas </h5>
                  <p class="card-text"><h5>Total:</h5></p>
                  <p class="card-text"><h3> $ {{ $totalr }} dólares</h3></p>
                  <p class="card-text"><h5>Usuario que esta registrando las ventas:</h5></p>
                  <p class="card-text"><h3>{{ auth()->user()->name }}</h3> </p>                
                </div>
            </div>
        </div>
    </div>
    </div>
           
        

        </div>
       
      
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4 mb-lg-3 mt-3">
            <a href="/" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Volver al inicio</a>
        </div>
    @endsection
