<!DOCTYPE html>
<html>
<head>
    <title>Nota de Entrega</title>
    <style>
        /* Estilos personalizados para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        .green-bg {
            background-color: #d1f9d1; /* Fondo verde suave */
        }
        .footer {
            position: fixed;
            bottom: 0;
        }
        .signature {
            text-align: center;
            padding: 10px;
        }
        .logo {
            width: 120px;
            height: auto;
            position: absolute;
            top: 10px; /* Ajusta la posición vertical del logo */
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">NOTA DE ENTREGA</h1>
    <img src="{{ public_path('images/selecta.jpg') }}" alt="Imagen de la empresa" class="logo" style="float: right;">

    <strong>Fecha: {{ $lechuga->FECHA }}</strong>
    <br>
    <strong>Cliente: {{ $lechuga->NOMBREC }}</strong>
    <br><br> <!-- Agrega espacio entre los datos y la tabla -->
    <table>
        <thead>
            <tr class="green-bg">
                <th>ID</th>
                <th>Tipo</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $lechuga->ID }}</td>
                <td>{{ $lechuga->TIPOL }}</td>
                <td>{{ $lechuga->CANTL }}</td>
            </tr>
        </tbody>
    </table>
    
    <div style="margin-top: 250px;"> <!-- Mueve las firmas al final -->
        <!-- Firma del cliente y del encargado -->
        <table style="width: 100%;">
            <tr>
                <td class="signature">
                    <strong>Firma del Cliente: __________________</strong>
                </td>
                <td class="signature">
                    <strong>Firma del Encargado: __________________</strong>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
