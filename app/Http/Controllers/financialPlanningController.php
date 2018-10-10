<?php

namespace App\Http\Controllers;

use App\financialPlanning;
use Illuminate\Http\Request;

class financialPlanningController extends Controller
{
    public function index()
    {
         $financialaplannings = financialPlanning::latest()->paginate(4);
        return view('financialPlanning', compact('financialaplannings'));
    }
}
