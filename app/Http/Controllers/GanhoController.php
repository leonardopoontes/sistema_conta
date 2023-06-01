<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancasGanhoRequest;
use App\Http\Requests\FinancasRequest;
use App\Models\Ganho;
use Illuminate\Http\Request;

class GanhoController extends Controller
{

    public function index(Request $request)
    {
        $selectedMonth = $request->input('month') ?? date('m');

        $user = auth()->user(); // Obtém o usuário autenticado

        $ganhos = $user->ganhos()->whereMonth('data', $selectedMonth)->get();
        $ganhostotal = $user->ganhos()->whereMonth('data', $selectedMonth)->sum('ganho');

        return view('ganhos.index', [
            'ganhos' => $ganhos,
            'ganhostotal' => $ganhostotal,
        ]);
    }

    public function create()
    {
        return view('ganhos.create');
    }

    public function store(FinancasGanhoRequest $request)
    {
        $data = $request->validated();
        $data['month_id'] = date('m', strtotime($data['data']));
        $data['user_id'] = auth()->user()->id;
        Ganho::create($data);

        return redirect('/ganhos');
    }


    public function show(string $id)
    {
        $ganhos = Ganho::all($id);

        return view('ganhos', [
            'ganhos' => $ganhos,
        ]);
    }

    public function edit(string $id)
    {
        $ganho = Ganho::find($id);

        return view('ganhos.edit', [
            'ganho' => $ganho,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $ganho = Ganho::find($id);
        $ganho->update($data);

        return redirect()->back();
    }


    public function destroy(string $id)
    {
        $ganho = Ganho::find($id);
        $ganho->delete();

        return redirect()->back();
    }
}
