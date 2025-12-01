<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
     public function index()
    {
        $departments = Department::all();
        return view('department.index', compact('departments'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('department.create', compact('departments'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'nome_departamento' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
        ]);

        Department::create([
            'nome_departamento' => $request->nome_departamento,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('department.index')->with('success', 'Post criado com sucesso!');

    }


    public function show(employee $employee)
    {
        //
    }


    public function edit(string $id)
    {
        $department = Department::findOrFail($id);
        return view('department.edit', compact('department'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome_departamento' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
        ]);

        $department = Department::findOrFail($id);
        $department->update([
            'nome_departamento' => $request->nome_departamento,
            'descricao' => $request->descricao
        ]);
        return redirect()->route('department.index') ->with('success', 'Produto atualizado com sucesso!');    
    }


    public function destroy(string $id)
    {
        $department = Department::findOrFail($id);

        $department->delete();

         return redirect()->route('department.index')->with('success', 'Produto excluido com sucesso!');
    }
}
