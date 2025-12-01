<?php

namespace App\Http\Controllers;

use App\Models\employee;
use App\Models\PerformanceReviews;
use Illuminate\Http\Request;

class PerformanceReviewsController extends Controller
{

    public function index()
    {
        $employees = employee::all();
        $PerformanceReviews = PerformanceReviews::all();
        return view('PerformanceReviews.index', compact('employees', 'PerformanceReviews'));
    }


    public function create()
    {
        $employees = employee::all();
        return view('PerformanceReviews.create', compact('employees'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nota' => 'required|integer|min:0|max:10',
            'data_avaliacao' => 'required|date',
            'observacao' => 'nullable|string|max:255',
            'id_employee' => 'required|exists:employees,id',
        ]);

        PerformanceReviews::create([
        'nota' => $request->nota,
        'data_avaliacao' => $request->data_avaliacao,
        'observacao' => $request->observacao,
        'id_employee' => $request->id_employee,
        ]);

        return redirect()->route('Performance-Reviews.index')->with('success', 'Post criado com sucesso!');
        
    }


    public function show(PerformanceReviesws $PerformanceReviesws)
    {

    }


    public function edit(string $id)
    {
        $PerformanceReview = PerformanceReviews::findOrFail($id);
        $employees = employee::all();
        return view('PerformanceReviews.edit', compact('employees' , 'PerformanceReview'));
    }


    public function update(Request $request, string $id)
    {

        $request->validate([
            'nota' => 'required|numeric|min:0|max:10',
            'data_avaliacao' => 'required|date',
            'observacao' => 'nullable|string|max:255',
            'id_employee' => 'required|exists:employees,id',
        ]);

        $PerformanceReview = PerformanceReviews::findOrFail($id);

        $PerformanceReview->update([
            'nota'=> $request->nota,
            'data_avaliacao' => $request->data_avaliacao,
            'observacao' => $request->observacao,
            'id_employee' => $request->id_employee,
        ]);

        return redirect()->route('Performance-Reviews.index') ->with('success', 'Produto atualizado com sucesso!');
    }


    public function destroy(string $id)
    {
        $PerformanceReviesws = PerformanceReviews::findOrFail($id);

        $PerformanceReviesws->delete();

        return redirect()->route('Performance-Reviews.index')->with('success', 'Produto excluido com sucesso!');
    }
}
