<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();  
        return view('position.index', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('position.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Position::create([
        'nome_cargo' => $request->nome_cargo,
        'salario_base' => $request->salario_base,
        ]);

        return redirect()->route('position.index')->with('success', 'Post criado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $position = Position::findOrFail($id);
        return view('position.edit', compact('position'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $position = Position::findOrFail($id);
        $position->update([
            'nome_cargo' => $request->nome_cargo,
            'salario_base' => $request->salario_base,
        ]);
        return redirect()->route('position.index') ->with('success', 'Produto atualizado com sucesso!');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $position = Position::findOrFail($id);

        $position->delete();

         return redirect()->route('position.index')->with('success', 'Produto excluido com sucesso!');
    }
}
?>
