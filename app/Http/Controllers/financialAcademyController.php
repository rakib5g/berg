<?php

namespace App\Http\Controllers;

use App\FinancialAcademy;
use Illuminate\Http\Request;

class financialAcademyController extends Controller
{
    public function index()
    {
        $financialacademies = FinancialAcademy::latest()->paginate(9);
        return view('financialAcademy', compact('financialacademies'));
    }
}
