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
        $departments = Department::all();
        return view('employee.index', compact('employees', 'positions', 'departments'));
    }

    public function create()
    {   $departments = Department::all();
        $positions = Position::all();
        return view('employee.create', compact('positions' , 'departments'));
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
        'departamento_id' => $request->departamento_id,
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
        $departments = Department::all();
        return view('employee.edit', compact('employee' , 'positions' , 'departments'));
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
            'departamento_id' => $request->departamento_id,
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
