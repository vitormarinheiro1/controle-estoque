<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquinas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Relatório de Máquinas Ativas</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Colaborador</th>
                <th>Departamento</th>
                <th>Hostname</th>
                <th>IP</th>
                <th>Mac Address</th>
                <th>Observação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($maquinas as $maquina)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $maquina->colaborador }}</td>
                    <td>{{ $maquina->departamento }}</td>
                    <td>{{ $maquina->hostname }}</td>
                    <td>{{ $maquina->ip }}</td>
                    <td>{{ $maquina->mac_address }}</td>
                    <td>{{ $maquina->observacao }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
