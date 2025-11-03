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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();
        return view('department.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Department::create([
            'nome_departamento' => $request->nome_departamento,
            'descricao' => $request->descricao,
        ]);

        return redirect()->route('department.index')->with('success', 'Post criado com sucesso!');

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
        $department = Department::findOrFail($id);
        return view('department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $department = Department::findOrFail($id);
        $department->update([
            'nome_departamento' => $request->nome_departamento,
            'descricao' => $request->descricao
        ]);
        return redirect()->route('department.index') ->with('success', 'Produto atualizado com sucesso!');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department = Department::findOrFail($id);

        $department->delete();

         return redirect()->route('department.index')->with('success', 'Produto excluido com sucesso!');
    }
}
