<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index()
    {
        $positions = Position::all();  
        return view('position.index', compact('positions'));
    }


    public function create()
    {
        return view('position.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome_cargo' => 'required|string|max:255',
            'salario_base' => 'required|numeric|min:0',
        ]);

        Position::create([
        'nome_cargo' => $request->nome_cargo,
        'salario_base' => $request->salario_base,
        ]);

        return redirect()->route('position.index')->with('success', 'Post criado com sucesso!');

    }


    public function show(Position $position)
    {
        //
    }


    public function edit(string $id)
    {
        $position = Position::findOrFail($id);
        return view('position.edit', compact('position'));
    }


    public function update(Request $request, string $id)
    {   
        $request->validate([
            'nome_cargo' => 'required|string|max:255',
            'salario_base' => 'required|numeric|min:0',
        ]);

        $position = Position::findOrFail($id);
        $position->update([
            'nome_cargo' => $request->nome_cargo,
            'salario_base' => $request->salario_base,
        ]);
        return redirect()->route('position.index') ->with('success', 'Produto atualizado com sucesso!');   
    }


    public function destroy(string $id)
    {
        $position = Position::findOrFail($id);

        $position->delete();

         return redirect()->route('position.index')->with('success', 'Produto excluido com sucesso!');
    }
}
?>
