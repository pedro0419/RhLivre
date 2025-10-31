<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employee::all();
        $positions = Position::all();
        return view('employee.index', compact('employees') , compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $positions = Position::all();
        return view('employee.create', compact('positions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        employee::create([
        'nome' => $request->nome,
        'cpf' => $request->cpf,
        'telefone' => $request->telefone,
        'data_nascimento' => $request->data_nascimento,
        'salario' => str_replace(',', '.', $request->salario),
        'cargo_id' => $request->cargo_id,
        ]);

        return redirect()->route('employee.index')->with('success', 'Post criado com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = employee::findOrFail($id);
        $positions = Position::all();
        return view('employee.edit', compact('employee') , compact('positions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = employee::findOrFail($id);
        $employee->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'data_nascimento' => $request->data_nascimento,
            'salario' => $request->salario,
        ]);
        return redirect()->route('employee.index') ->with('success', 'Produto atualizado com sucesso!');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = employee::findOrFail($id);

        $employee->delete();

         return redirect()->route('employee.index')->with('success', 'Produto excluido com sucesso!');
    }
}
