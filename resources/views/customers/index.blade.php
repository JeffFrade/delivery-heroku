<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Laravel Básico</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <h1>Clientes</h1>

            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Cidade/Estado</th>
                    <th>Nascimento</th>
                    <th>Ações</th>
                </tr>

                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->city }} {{ $customer->state }}</td>
                        <td>{{ $customer->birthdate  }}</td>
                        <td width="1%" nowrap="">
                            <a href="#" class="btn btn-xs btn-default">Editar</a>
                            <a href="#" class="btn btn-xs btn-default">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>