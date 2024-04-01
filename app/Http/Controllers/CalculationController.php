<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use App\Models\CriteriaWeight;

class CalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criteria = Criteria::orderBy('code')->get();
        $weight = CriteriaWeight::get();
        $alternative = Alternative::orderBy('code')->get();

        return view('dashboard.calculation.main', [
            'criteria' => $criteria,
            'value' => $weight,
            'alternative' => $alternative
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CriteriaWeight $criteriaWeight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CriteriaWeight $criteriaWeight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CriteriaWeight $criteriaWeight)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CriteriaWeight $criteriaWeight)
    {
        //
    }
}
