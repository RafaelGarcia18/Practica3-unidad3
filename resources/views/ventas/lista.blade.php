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
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>

                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ventas as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->producto }}</td>
                                        <td>{{ $item->descripcion }}</td>
                                        <td>{{ $item->cantidad }}</td>
                                        <td>{{ $item->precio }}</td>
                                        <td>{{ $item->precio * $item->cantidad }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            Total: {{ $totalr }}
                        </div>
                        {{-- fin card body --}}
                        {{ $ventas->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4 mb-lg-3 mt-3">
            <a href="/" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Volver al inicio</a>
        </div>
    @endsection
