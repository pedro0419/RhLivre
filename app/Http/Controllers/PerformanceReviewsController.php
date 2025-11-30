<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\PerformanceReviews;
use Illuminate\Http\Request;

class PerformanceReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = employee::all();
        $PerformanceReviews = PerformanceReviews::all();
        return view('PerformanceReviews.index', compact('employees', 'PerformanceReviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = employee::all();
        return view('PerformanceReviews.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nota' => 'required|integer|min:0|max:10',
            'data_avaliacao' => 'required|date',
            'observacao' => 'nullable|string|max:255',
            'employee_id' => 'required|exists:employees,id',
        ]);

        PerformanceReviews::create([
        'nota' => $request->nota,
        'data_avaliacao' => $request->data_avaliacao,
        'observacao' => $request->observacao,
        'id_employee' => $request->employee_id,
        ]);
        return redirect()->route('Performance-Reviews.index')->with('success', 'Post criado com sucesso!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(PerformanceReviesws $PerformanceReviesws)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $PerformanceReview = PerformanceReviews::findOrFail($id);
        $employees = employee::all();
        return view('PerformanceReviews.edit', compact('employees' , 'PerformanceReview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nota' => 'required|integer|min:0|max:10',
            'data_avaliacao' => 'required|date',
            'observacao' => 'nullable|string|max:255',
            'employee_id' => 'required|exists:employees,id',
        ]);

        $PerformanceReviesws = PerformanceReviews::findOrFail($id);
        $PerformanceReviesws->update([
            'nota'=> $request->nota,
            'data_avaliacao' => $request->data_avaliacao,
            'observacao' => $request->observacao,
            'id_employee' => $request->id_employee,
        ]);

        return redirect()->route('Performance-Reviews.index') ->with('success', 'Produto atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $PerformanceReviesws = PerformanceReviews::findOrFail($id);

        $PerformanceReviesws->delete();

        return redirect()->route('Performance-Reviews.index')->with('success', 'Produto excluido com sucesso!');
    }
}
