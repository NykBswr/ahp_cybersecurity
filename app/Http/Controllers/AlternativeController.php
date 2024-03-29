<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAlternativeRequest;
use App\Http\Requests\UpdateAlternativeRequest;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alternative = Alternative::orderBy('code')->get();

        return view('dashboard.alternative.main', [
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
    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'code' => 'required|unique:alternatives,code|string',
            'name' => 'required|unique:alternatives,name|string',
        ]);

        // Simpan data ke dalam database
        $alternative = new Alternative;
        $alternative->name = $request->input('name');
        $alternative->code = $request->input('code');
        $alternative->save();

        return redirect('/dashboard/alternative')->with('success', 'The alternative was added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $alternative = Alternative::orderBy('code')->get();
        $criteria = Criteria::orderBy('code')->get();

        return view('dashboard.alternativeWeight.main', [
            'alternative' => $alternative,
            'criteria' => $criteria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alternative $alternative)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alternative $alternative)
    {
        if ($request->input('name') !== null){
            $request->validate(['name' => 'required|string|unique:alternatives,name']);
            $alternative->update(['name' => $request->input('name')]);
        }

        return redirect('/dashboard/alternative')->with('success', 'The alternative detail was updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alternative $alternative)
    {
        $alternative->delete();

        return redirect('/dashboard/alternative')->with('success', 'Alternative deleted successfully!');
    }
}
