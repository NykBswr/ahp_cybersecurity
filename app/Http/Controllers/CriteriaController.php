<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Models\CriteriaWeight;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Requests\UpdateCriteriaRequest;

class CriteriaController extends Controller
{
    public function index()
    {
        $criteria = Criteria::orderBy('code')->get();

        return view('dashboard.criteria.main', [
            'criteria' => $criteria
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'code' => 'required|unique:criterias,code|string',
            'name' => 'required|unique:criterias,name|string',
        ]);

        // Simpan data ke dalam database
        $criteria = new Criteria;
        $criteria->name = $request->input('name');
        $criteria->code = $request->input('code');
        $criteria->save();

        // Menambahkan kolom baru untuk kriteria baru dalam tabel CriteriaWeight
        // Memberi nama kolom untuk perbandingan ini
        $columnName = 'W' . $criteria->id;
        
        // Cek apakah kolom sudah ada, jika belum tambahkan kolom baru
        Schema::table('criteria_weights', function (Blueprint $table) use ($columnName) {
            if (!Schema::hasColumn('criteria_weights', $columnName)) {
                $table->decimal($columnName, 8, 2)->nullable()->after('id');
            }
        });

        // Simpan nilai awal untuk perbandingan ini
        $newComparison = new CriteriaWeight;
        $newComparison->$columnName = 1; // Nilai awal adalah 1 karena kriteria dengan dirinya sendiri memiliki nilai 1
        $newComparison->save();

        return redirect('/dashboard')->with('success', 'The criteria was added successfully');
    }

    public function addWeight(Request $request)
    {
        $criterion1_id = $request->criterion1_id;
        $criterion2_id = $request->criterion2_id;
        $colName = 'W' . strval($request->criterion2_id);
        $colName2 = 'W' . strval($request->criterion1_id);

        // Mendapatkan nilai bobot dari request
        $weight = $request->input($criterion2_id);
        $weight2 = 1 / $weight;

        // Mencari atau membuat entri CriteriaWeight sesuai criterion1_id
        $criteriaWeight = CriteriaWeight::where('id', $criterion1_id)->first();
        $criteriaWeight2 = CriteriaWeight::where('id', $criterion2_id)->first();

        $criteriaWeight->$colName = $weight;
        $criteriaWeight2->$colName2 = $weight2;
        $criteriaWeight->save();
        $criteriaWeight2->save();

        return redirect('/dashboard/criteriaWeight')->with('success', 'The criteria weight was updated successfully');
    }


    public function show()
    {
        $criteria = Criteria::orderBy('code')->get();
        $value = CriteriaWeight::get();

        return view('dashboard.criteriaWeight.main', [
            'criteria' => $criteria,
            'value' => $value,
        ]);
    }

    public function edit(Criteria $criteria)
    {
        //
    }

    public function update(Request $request, Criteria $criteria)
    {
        $id = $request->id;
        $criteria = $criteria->where($criteria->id, $id)->first();
        if ($request->input('name') !== null){
            $request->validate(['name' => 'required|string|unique:criterias,name']);
            $criteria->update(['name' => $request->input('name')]);
        }

        return redirect('/dashboard/criteria')->with('success', 'The criteria detail was updated successfully');
    }

    public function destroy(Criteria $criteria)
    {
        $criteria->delete();

        return redirect('/dashboard/criteria')->with('success', 'Criteria deleted successfully!');
    }
}
