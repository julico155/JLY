@extends('dashboard')

@section('Contenido')
    <a href="{{ route('producto.create') }}"><button>Crear producto</button></a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pro as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
