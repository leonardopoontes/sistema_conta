<!doctype html>
<html lang=pt-br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
<main class="container">
    <h2>Sistema de contas - Entradas</h2>

    <div>
        <a href="{{ route('debts.index') }}" class="btn btn-primary">Voltar</a>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>-</th>
            <th>Origem</th>
            <th>Valor</th>
            <th>Dia recebimento</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ganhos as $ganho)
        <tr>
            <td>{{ $ganho->id }}</td>
            <td>{{ $ganho->fonte }}</td>
            <td>R$ {{ $ganho->ganho }}</td>
            <td>{{ $ganho->data }}</td>
            <td>
                <a href="{{ route('ganhos.edit', $ganho->id) }}" type="buttton" class="btn btn-success">Editar</a>
            </td>
            <td>
                <form action="{{ route('ganhos.destroy', $ganho->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>

        </tr>
        @endforeach

        <tr>
            <td>Total</td>
            <td></td>
            <td>R$ {{ $ganhostotal }}</td>
            <td></td>
        </tr>
        </tbody>
    </table>

</main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
