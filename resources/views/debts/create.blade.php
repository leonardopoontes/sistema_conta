<x-app-layout>
    <x-layout>
<main class="container">
    <form action="{{ route('debts.store') }}" method="post">

        @csrf
        <div class="form-group">
            <label for="origem">Origem:</label>
            <input type="text"  name="origem" id="origem" class="form-control @error('origem') is-invalid @enderror">
            @error('origem')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control @error('descricao') is-invalid @enderror">
            @error('descricao')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control @error('valor') is-invalid @enderror">
            @error('valor')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="vencimento">Vencimento:</label>
            <input type="date" name="vencimento" id="vencimento" class="form-control @error('vencimento') is-invalid @enderror">
            @error('vencimento')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>


        <div class="form-group mb-4 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>

    </form>

</main>
    </x-layout>
</x-app-layout>
