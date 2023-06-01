<x-app-layout>
    <x-layout>
<main class="container">
    <form action="{{ route('ganhos.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="fonte">Origem:</label>
            <input type="text" name="fonte" id="fonte" class="form-control @error('fonte') is-invalid @enderror">
            @error('fonte')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="ganho">Valor:</label>
            <input type="text" name="ganho" id="ganho" class="form-control @error('fonte') is-invalid @enderror">
            @error('ganho')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="data">Recebimento:</label>
            <input type="date" name="data" id="data" class="form-control @error('data') is-invalid @enderror">
            @error('data')
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
