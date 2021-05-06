@extends('layouts.principal');  
        
    @section('contenido')
        <h2>Agregar nuevo Item</h2>
        <br>
        <form action="/items" method="post">
            @csrf
            <div class="mb-4">
                <label for="" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control">
            </div>

            <div class="mb-4">
                <label for="" class="form-label">Tipo</label>
                <input type="text" name="tipo" class="form-control">
            </div>
            
            <div class="mb-4">
                <label for="" class="form-label">Unidad(mts, kg, etc)</label>
                <input type="text" name="unidad" class="form-control">
            </div>
            
            <div class="mb-4">
                <label for="" class="form-label">Cantidad</label>
                <input type="text" name="cantidad" class="form-control">
            </div>
            
            <div class="mb-4">
                <label for="" class="form-label">Costo x unidad</label>
                <input type="text" name="costo_unidad" class="form-control">
            </div>
            
            <div class="mb-4">
                <label for="" class="form-label">Costo de Mano de Obra</label>
                <input type="text" name="costo_deManoDeObra" class="form-control">
            </div>
            
            <div class="mb-4">
                <label for="" class="form-label">Total</label>
                <input type="text" name="total" class="form-control">
            </div>
            
            <div class="mb-4">
                <a href="/items" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    @endsection