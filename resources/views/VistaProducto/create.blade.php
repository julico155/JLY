@extends('dashboard')

@section('Contenido')

<form action="{{ route('producto.store') }}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" min="0" step="0.01" required>
    </div>
    <div>
        <label for="codigo">Código:</label>
        <input type="text" id="codigo" name="codigo" required>
    </div>
    <div>
        <button type="submit">Crear producto</button>
    </div>
</form>


@endsection
