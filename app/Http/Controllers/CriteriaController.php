<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCriteriaRequest;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $criteria = Criteria::all();

        return view('dashboard.criteria.main', [
            'criteria' => $criteria
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
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'code' => 'required|unique:criterias,code|string',
            'name' => 'required|unique:criterias,name|string',
            // 'value' => 'required|numeric',
        ]);

        // Simpan data ke dalam database
        $criteria = new Criteria;
        $criteria->name = $request->input('name');
        $criteria->code = $request->input('code');
        // $criteria->value = $validatedData['value'];
        $criteria->save();

        return redirect('/dashboard')->with('success', 'The criteria was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Criteria $criteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Criteria $criteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Criteria $criteria)
    {
        if ($request->input('name') !== null){
            $request->validate(['name' => 'required|string|unique:criterias,name']);
            $criteria->update(['name' => $request->input('name')]);
        }

        return redirect('/dashboard/criteria')->with('success', 'The criteria detail was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Criteria $criteria)
    {
        $criteria->delete();

        return redirect('/dashboard/criteria')->with('success', 'Criteria deleted successfully!');
    }
}
