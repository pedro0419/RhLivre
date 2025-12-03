<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;
use App\Models\PerformanceReviews;
use App\Models\LacationsLeaves;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'totalEmployees' => Employee::count(),
            'totalDepartments' => Department::count(),
            'totalPositions' => Position::count(),
            'totalReviews' => PerformanceReviews::count(),
            'totalLeaves' => LacationsLeaves::count(),
        ]);
    }
}