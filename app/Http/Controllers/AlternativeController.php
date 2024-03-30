<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\CriteriaWeight;
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
            'criteria' => $criteria,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function addWeight(Alternative $alternative, Request $request)
    {
        if ($request->filled('code') && $request->filled('name')) {
            // Jika code dan name telah diberikan nilai, update keduanya
            $alternative->update([
                'code' => $request->input('code'),
                'name' => $request->input('name'),
            ]);
        } elseif ($request->filled('code')) {
            // Jika hanya code yang telah diberikan nilai, update code
            $alternative->update([
                'code' => $request->input('code'),
            ]);
        } elseif ($request->filled('name')) {
            // Jika hanya name yang telah diberikan nilai, update name
            $alternative->update([
                'name' => $request->input('name'),
            ]);
        }

        $criteria = Criteria::all();
        // Mengupdate nilai kriteria jika ada perubahan
        foreach ($criteria as $criterion) {
            $colName = 'C' . $criterion->id;
            if ($request->filled($colName)) {
                $weight = $request->input($colName);
                $alternative->$colName = $weight;
                $alternative->save();
            }
        }

        return redirect()->back()->with('success', 'Alternative updated successfully!');
    }

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
