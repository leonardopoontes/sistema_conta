<x-app-layout>
<x-layout>
<main class="container">
    <form action="{{ route('debts.update', $debt->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="origem">Origem:</label>
            <input type="text" class="form-control" name="origem" id="origem" value="{{ $debt->origem }}">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{ $debt->descricao }}">
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" class="form-control" name="valor" id="valor" value="{{ $debt->valor }}">
        </div>

        <div class="form-group mb-3">
            <label for="vencimento">Vencimento:</label>
            <input type="date" class="form-control" name="vencimento" id="vencimento" value="{{ $debt->vencimento }}">
        </div>

        <div class="form-group mb-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>

</main>
</x-layout>
</x-app-layout>
