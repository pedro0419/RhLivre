<?php

namespace App\Http\Controllers;

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
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('employee.create');
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
        'salario' => $request->salario,
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
        return view('employee.edit', compact('employee'));
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
