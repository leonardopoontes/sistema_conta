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
    <h2>Sistema de contas</h2>
    <form action="{{ route('debts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="origem">Origem:</label>
            <input type="text" class="form-control" name="origem" id="origem">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="descricao">
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" class="form-control" name="valor" id="valor">
        </div>

        <div class="form-group mb-3">
            <label for="vencimento">Vencimento:</label>
            <input type="date" class="form-control" name="vencimento" id="vencimento">
        </div>


        <div class="form-group mb-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>

</main>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
