<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\LacationsLeaves;
use Illuminate\Http\Request;

class LacationsLeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employee::all();
        $lacationsLeaves = LacationsLeaves::all();
        return view('lacationsLeaves.index', compact('employees', 'lacationsLeaves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = employee::all();
        return view('lacationsLeaves.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'tipo_ferias' => 'required|string|max:255',
        'data_inicio' => 'required|date',
        'data_fim' => 'required|date|after_or_equal:data_inicio',
        'observacoes' => 'nullable|string|max:255',
        'employee_id' => 'required|exists:employees,id',
        ]);

        LacationsLeaves::create([
        'tipo_ferias' => $request->tipo_ferias,
        'data_inicio' => $request->data_inicio,
        'data_fim' => $request->data_fim,
        'observacoes' => $request->observacoes,
        'employee_id' => $request->employee_id,
        ]);

        return redirect()->route('lacations-leaves.index')->with('success', 'Post criado com sucesso!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(LacationsLeaves $lacationsLeaves)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lacationsLeave = LacationsLeaves::findOrFail($id);
        $employees = employee::all();
        return view('lacationsLeaves.edit', compact('employees' , 'lacationsLeave'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipo_ferias' => 'required|string|max:255',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'observacoes' => 'nullable|string',
            'employee_id' => 'required|exists:employees,id',
        ]);

        $lacationsLeaves = LacationsLeaves::findOrFail($id);
        $lacationsLeaves->update([
            'tipo_ferias'=> $request->tipo_ferias,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'observacoes' => $request->observacoes,
            'employee_id' => $request->employee_id,
        ]);

        return redirect()->route('lacations-leaves.index') ->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lacationsLeaves = LacationsLeaves::findOrFail($id);

        $lacationsLeaves->delete();

        return redirect()->route('lacations-leaves.index')->with('success', 'Produto excluido com sucesso!');
    }
}
