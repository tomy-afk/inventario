@extends('adminlte::page')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Lechuga Form') }}</div>

                <div class="card-body">
                    <form action="{{ route('save-lechuga') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="TIPOL">Tipo de Lechuga:</label>
                            <input type="text" class="form-control" id="TIPOL" name="TIPOL" required>
                        </div>

                        <div class="form-group">
                            <label for="CANTL">Cantidad de Lechuga:</label>
                            <input type="number" class="form-control" id="CANTL" name="CANTL" required>
                        </div>

                        <div class="form-group">
                            <label for="FECHA">Fecha:</label>
                            <input type="date" class="form-control" id="FECHA" name="FECHA" required>
                        </div>

                        <div class="form-group">
                            <label for="NOMBREC">Nombre del Cliente:</label>
                            <input type="text" class="form-control" id="NOMBREC" name="NOMBREC" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
