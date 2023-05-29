<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinancasGanhoRequest;
use App\Http\Requests\FinancasRequest;
use App\Models\Ganho;
use Illuminate\Http\Request;

class GanhoController extends Controller
{

    public function index()
    {
        $ganhos = Ganho::all();
        $ganhostotal = Ganho::sum('ganho');

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
        dd($data);
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
