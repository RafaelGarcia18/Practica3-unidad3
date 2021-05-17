@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 ">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h1 class="display-4 fw-bold lh-1">Practica 3 de unidad 3</h1>
                <p class="lead">Materia: Tecnicas de programacion en internet</p>
                <p class="lead">Integrantes:</p>
                <div class="lead">
                    Rafael Edgardo Garcia Estrada GE17001<br>
                    Natalia Sofía Martinez Lima ML17002<br>
                    Mario Edgardo Vanegas Cardoza VC17018<br>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 mt-3">
                    <a href="/ventas" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Vamos a comprar</a>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-lg-3"
                    src="https://www.ues.edu.sv/storage/app/uploads/public/5db/8b2/922/5db8b292249e3987748465.png" alt=""
                    width="350">
            </div>
        </div>
    </div>
@endsection
