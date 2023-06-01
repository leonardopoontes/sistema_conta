<x-app-layout>
<x-layout>
    <main class="container">
    <form action="{{ route('ganhos.update', $ganho->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="fonte">Origem:</label>
            <input type="text" class="form-control" name="fonte" id="fonte" value="{{ $ganho->fonte }}">
        </div>

        <div class="form-group">
            <label for="ganho">Valor:</label>
            <input type="number" class="form-control" name="ganho" id="ganho" value="{{ $ganho->ganho }}">
        </div>

        <div class="form-group mb-3">
            <label for="data">Recebimento:</label>
            <input type="date" class="form-control" name="data" id="data" value="{{ $ganho->data }}">
        </div>

        <div class="form-group mb-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>

</main>

</body>

</x-layout>
</x-app-layout>
