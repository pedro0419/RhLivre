<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Position;
use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = employee::all();
        $positions = Position::all();
        return view('employee.index', compact('employees') , compact('positions'));
    }

    public function create()
    {
        $positions = Position::all();
        return view('employee.create', compact('positions'));
    }

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

    public function show(employee $employee)
    {
        //
    }

    public function edit(string $id)
    {
        $employee = employee::findOrFail($id);
        $positions = Position::all();
        return view('employee.edit', compact('employee') , compact('positions'));
    }

    public function update(Request $request, string $id)
    {
        $employee = employee::findOrFail($id);
        $employee->update([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'data_nascimento' => $request->data_nascimento,
            'salario' => $request->salario,
            'cargo_id' => $request->cargo_id,
        ]);
        return redirect()->route('employee.index') ->with('success', 'Produto atualizado com sucesso!');    
    }

    public function destroy(string $id)
    {
        $employee = employee::findOrFail($id);

        $employee->delete();

         return redirect()->route('employee.index')->with('success', 'Produto excluido com sucesso!');
    }
}
