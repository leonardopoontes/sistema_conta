<x-app-layout>
<x-layout>
        @csrf
        <div class="row">
            <div class="mb-5">
                    @foreach (range(1,12) as $month)
                        <a href="{{ route('debts.index', ['month' => $month]) }}" class="btn btn-secondary">{{ date('F', mktime(0, 0, 0, $month, 1)) }}</a>
                    @endforeach
            </div>
            <div>
                <a href="/debts/create" class="btn btn-primary mb-4">Adicionar dívida</a>
            </div>

            <div class="mb-3">
                <h4>Dividas</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Origem</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Vencimento</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($debts as $debt)
                        <tr>
                            <td>-</td>
                            <td>{{ $debt->origem }}</td>
                            <td>{{ $debt->descricao }}</td>
                            <td>R$ {{ $debt->valor }}</td>
                            <td>{{ date('d - m - Y', strtotime($debt->vencimento)) }}</td>
                            <td>
                                <a href="{{ route('debts.edit', $debt->id) }}" type="button" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('debts.destroy', $debt->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    <tr class="table-info">
                        <td>Total</td>
                            <td>-</td>
                            <td>-</td>
                            <td>R$ {{ $totalDebts }}</td>
                        <td>-</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <!-- adicionar entrada de dinheiro !-->
                <h4>Entradas</h4>
                <a href="/ganhos/create" class="btn btn-primary mt-2">Adicionar Entrada</a>
                <a href="/ganhos/" class="btn btn-primary mt-2">Ver Entradas</a>
            </div>
        </div>


</x-layout>
</x-app-layout>
