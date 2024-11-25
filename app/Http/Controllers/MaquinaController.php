<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    public function index()
    {
        $maquinas = Maquina::query()->orderBy('departamento')->get();

        return view('maquinas.index')->with('maquinas', $maquinas);
    }

    public function create()
    {
        return view('maquinas.create');
    }

    public function store(Request $request)
    {
        Maquina::create($request->all());

        return to_route('maquinas.index');
    }

    public function destroy(Maquina $maquina)
    {
        $maquina->delete();
        return to_route('maquinas.index');
    }

    public function edit(Maquina $maquina)
    {
        return view('maquinas.index')->with('maquina', $maquina);
    }
}
