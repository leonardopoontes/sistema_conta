<x-layout>

    @section('content')
        <div>
            <h2>Debitos</h2>
            @include('debts.index', ['debts' => $debts, 'totalDebts' => $totalDebts, 'selectedMonth' => $selectedMonth])

        </div>
    @endsection

</x-layout>
