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
    <form action="{{ route('ganhos.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="fonte">Origem:</label>
            <input type="text" class="form-control" name="fonte" id="fonte">
        </div>

        <div class="form-group">
            <label for="ganho">Valor:</label>
            <input type="text" class="form-control" name="ganho" id="ganho">
        </div>

        <div class="form-group mb-3">
            <label for="data">Recebimento:</label>
            <input type="date" class="form-control" name="data" id="data">
        </div>

        <div class="form-group mb-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>

</main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
