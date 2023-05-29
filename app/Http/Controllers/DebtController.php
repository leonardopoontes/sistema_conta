<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancasRequest;
use App\Models\Debito;
use App\Models\Debt;
use App\Models\Mes;
use App\Models\Debts;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index(Request $request)
    {
        $selectedMonth = $request->input('month') ?? date('m');

        $debts = Debito::whereMonth('vencimento', $selectedMonth)->get();
        $totalDebts = Debito::sum('valor');

        return view('debts.index', [
            'debts' => $debts,
            'totalDebts' => $totalDebts,
            'selectedMonth' => $selectedMonth,
        ]);
    }

    public function create()
    {
        return view('debts.create');
    }


    public function store(FinancasRequest $request)
    {
        $debt = new Debito();
        $debt->origem = $request->input('origem');
        $debt->descricao = $request->input('descricao');
        $debt->valor = $request->input('valor');
        $debt->vencimento = $request->input('vencimento');
        $debt->month_id = date('m', strtotime($request->input('vencimento')));
        $debt->save();


        return redirect('/debts');
    }

    public function show(Request $request, $id)
    {


    }

    public function edit($id)
    {
        $debt = Debito::find($id);

        return view('debts.edit', [
            'debt' => $debt,
        ]);

    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $debt = Debito::find($id);
        $debt->update($data);

        return redirect()->back();
    }

    public function destroy(string $id)
    {

        $debt = Debito::findOrFail($id);
        $debt->delete();

        return redirect('/debts')->with('success', 'Debt deleted successfully');
    }



}
