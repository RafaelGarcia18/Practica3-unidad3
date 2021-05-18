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
                        
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->producto }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->precio }}</td>
                                        <td>{{ $item->cantidad }}</td>
                                           @php
                                            $mult=0;
                                            @endphp
                                        <td id="col4">
                                        @foreach ($item as $items)
                                            @php
                                            $mult=$item->precio*$item->cantidad;//mulplicamos los valores, ahora solo falta mostrar dicho valor
                                            @endphp        
                                         @endforeach
                                         {{$mult}}
                                        </td>
                                    </tr>                                   
                                    
                                @endforeach                                
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td> <b> Total:</b> </td>
                                    @php
                                    $sum=0;
                                    @endphp
                                    <td scope="row"> 
                                        @php
                                        $total=0;
                                        $mul=0;
                                        @endphp
                                        @foreach ($item as $items)
                                            @php
                                            $mul=$item->precio*$item->cantidad;
                                            $total = $mul + $total;
                                            @endphp        
                                         @endforeach
                                         {{$total}}
                                    </td>                                                            
                                </tr>
                             

                            </tbody>
                            
                               
                          
                            
                        </table>                        
                        {{ $ventas->links() }}
                        {{-- fin card body --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
