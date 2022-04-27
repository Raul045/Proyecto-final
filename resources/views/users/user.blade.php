@extends('layouts.base')
    @section('content')
       <div class="containerTable">
            <table border="2px">
                   <thead>
                        <tr>
                            <th>id</th>
                            <th>Titulo</th>
                            <th>Descripcion</th>
                            <th></th>
                        </tr>
                   </thead>
                    @foreach($usuarios as $us)
                        <tr>
                            <td>{{ $us->id }}</td>
                            <td>{{ $us->Titulo }}</td>
                            <td>{{ $us->Descripcion }}</td>
                            <td>
                                <form method="POST" action="{{ route('eliminar', $us) }}">
                                    @csrf @method('DELETE')
                                    <button id="boton1">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
       </div>
    @endsection