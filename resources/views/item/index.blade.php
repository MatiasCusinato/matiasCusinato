@extends('layouts.principal');  
        
    @section('contenido')
    <h1 class="bg-primary text-center">Menu ITEM</h1>
    <a href="items/create" class="btn btn-success">CREAR ITEM</a>
    <table class="table table-sm border-primary table-bordered mt-4">
        <thead >
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">tipo</th>
                <th scope="col">unidad</th>
                <th scope="col">cantidad</th>
                <th scope="col">Costo por unidad</th>
                <th scope="col">Costo de Mano de obra</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        
        <tbody>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->tipo}}</td>
                <td>{{$item->unidad}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->costo_unidad}}</td>
                <td>{{$item->costo_deManoDeObra}}</td>
                <td>{{$item->Total}}</td>
                <td>
                    <form action="{{ route ('items.destroy',$item->id) }}" method="post">
                        <a href="/items/{{ $item->id }}/edit" class="btn btn-warning">Modificar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    
    </table>
    
    @endsection