<x-app-layout>
<x-layout>
<main class="container">
    <div class="mb-5">
        @foreach (range(1,12) as $month)
            <a href="{{ route('ganhos.index', ['month' => $month]) }}" class="btn btn-secondary">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</a>
        @endforeach
    </div>
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

</x-layout>
</x-app-layout>
