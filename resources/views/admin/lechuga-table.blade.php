@extends('adminlte::page')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Datos de Lechuga</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="lechugaTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Cantidad</th>
                            <th>Fecha</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($lechugas as $lechuga)
                        <tr>
                            <td>{{ $lechuga->ID }}</td>
                            <td>{{ $lechuga->TIPOL }}</td>
                            <td>{{ $lechuga->CANTL }}</td>
                            <td>{{ $lechuga->FECHA }}</td>
                            <td>{{ $lechuga->NOMBREC }}</td>
                            <td>
                                <a href="{{ route('lechuga.pdf', ['id' => $lechuga->ID]) }}" class="btn btn-primary" target="_blank">Descargar PDF</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(document).ready(function() {
                $('#lechugaTable').DataTable({
                    responsive: true // Hacer la tabla responsive
                });
            });
        </script>
    @endpush
@stop
