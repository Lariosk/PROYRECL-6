@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="image"></div>
    <div class="frm">
        <h3 style="color:#FF0000" ;>Ingresa los datos de tu Prestamo </h3>
        <form action="{{route('simulador')}}" method="POST">
            {{ method_field('POST') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nobre"> Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" name="fecha" id="fecha" placeholder="fecha">
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" class="form-control" name="monto" id="monto" placeholder="monto" min="500" step="500">
            </div>
            <div class="form-group">
                <label for="periodo">Periodo:</label>
                <select class="form-control" name="periodo" id="periodo">
                    <option value="">Elige el periodo</option>
                    <option value="semanal">semanal</option>
                    <option value="quincenal">quincenal</option>
                    <option value="mensual">mensual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="interes">Interes:</label>
                <input type="number" class="form-control" name="interes" id="interes" placeholder="interés" min="5" max="100" step=".01">
            </div>
            <div class="form-group">
                <label for="plazp">Plazo:</label>
                <input type="number" class="form-control" name="plazo" id="plazo" min="1" max="50" step="1" required>
            </div>
            <div class="form-group">
                <button class="btn btn-success btn-lg" id="simular" onclick="simularPrestamo()">Simular préstamo</button>
            </div>
        </form>
       

    </div>
    <div id="contenedorTabla">
            <div class="header">
                <h2>Prestamo</h2>
            </div>
            <div id="prestamo">
            </div>
            <br>

            <br>
            <div class="header">
                <h2>Amortizacion</h2>
            </div>
            <div id="amortizaciones">
            </div>
        </div>
</div>
@endsection