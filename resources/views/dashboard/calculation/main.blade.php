@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Criteria Matrix</h1>
    <div class="overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">

                    </th>
                    @foreach ($criteria as $criterion)
                        <th scope="col" class="px-6 py-3 text-center">
                            {{ $criterion->name }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($criteria as $criterion1)
                    <tr class="bg-white hover:bg-gray-50">
                        <th class="px-6 py-4 text-center text-xl">
                            {{ $criterion1->name }}
                        </th>
                        @foreach ($criteria as $criterion2)
                            @php
                                $colName = 'W' . $criterion2->id;
                                $weight = $value->where('id', $criterion1->id)->first();
                            @endphp
                            <td class="px-6 py-4 text-center">
                                {{ isset($weight->$colName) ? $weight->$colName : 0 }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                <tr class="bg-white text-xl hover:bg-gray-50">
                    <th class="border-t-2 border-dark px-6 py-4 text-center">
                        Total
                    </th>
                    @foreach ($criteria as $criterion1)
                        <th class="border-t-2 border-dark px-6 py-4 text-center">
                            @php
                                $total = 0;
                                foreach ($criteria as $criterion2) {
                                    $colName = 'W' . $criterion1->id;
                                    $weight = $value->where('id', $criterion2->id)->first();
                                    $total += isset($weight->$colName) ? $weight->$colName : 0;
                                }
                            @endphp
                            {{ $total }}
                        </th>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <h1 class="mb-10 mt-20 text-4xl font-semibold">Criterion Normalization Matrix</h1>
    <div class="overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">

                    </th>
                    @foreach ($criteria as $criterion)
                        <th scope="col" class="px-6 py-3 text-center">
                            {{ $criterion->name }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($criteria as $criterion1)
                    <tr class="bg-white hover:bg-gray-50">
                        <th class="bg-dark px-6 py-4 text-center text-xl text-white">
                            {{ $criterion1->name }}
                        </th>
                        @foreach ($criteria as $criterion2)
                            @php
                                $colName = 'W' . $criterion2->id;
                                $weight = $value->where('id', $criterion1->id)->first();
                                // Menyimpan total dari masing-masing kolom
                                $columnTotals = [];
                                foreach ($criteria as $criterion3) {
                                    $weight2 = $value->where('id', $criterion3->id)->first();
                                    foreach ($criteria as $criterion4) {
                                        $colName2 = 'W' . $criterion4->id;
                                        $columnTotals[$criterion4->id] = isset($columnTotals[$criterion4->id])
                                            ? $columnTotals[$criterion4->id] +
                                                (isset($weight2->$colName2) ? $weight2->$colName2 : 0)
                                            : (isset($weight2->$colName2)
                                                ? $weight2->$colName2
                                                : 0);
                                    }
                                }
                            @endphp
                            <td class="px-6 py-4 text-center">
                                {{ $columnTotals[$criterion2->id] != 0 ? number_format($weight->$colName / $columnTotals[$criterion2->id], 4) : 0 }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1 class="mb-10 mt-20 text-4xl font-semibold">Priority Weight Matrix and Consistency Measure</h1>
    <div class="w-[55vw] overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">

                    </th>
                    <th scope="col" class="w-[20vw] px-6 py-3 text-center">
                        Priority Weight
                    </th>
                    <th scope="col" class="w-[20vw] px-6 py-3 text-center">
                        Consistency Measure
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($criteria as $criterion1)
                    <tr class="bg-white hover:bg-gray-50">
                        <th class="bg-dark px-6 py-4 text-center text-xl text-white">
                            {{ $criterion1->name }}
                        </th>
                        @php
                            $countCriteria = count($criteria);

                            // Menyimpan bobot prioritas
                            $totalPriorityWeights = [];

                            // Iterasi untuk setiap kriteria
                            foreach ($criteria as $criterion2) {
                                // Inisialisasi total bobot prioritas untuk kriteria saat ini
                                $totalPriorityWeightForCriterion = 0;

                                // Perhitungan bobot prioritas untuk setiap kriteria pada baris saat ini
                                foreach ($criteria as $criterion3) {
                                    $colName = 'W' . $criterion3->id;
                                    $weight = $value->where('id', $criterion2->id)->first();
                                    $priorityWeight = isset($weight->$colName)
                                        ? $weight->$colName / $columnTotals[$criterion3->id]
                                        : 0;
                                    // Menambahkan bobot prioritas ke total bobot prioritas untuk kriteria saat ini
                                    $totalPriorityWeightForCriterion += $priorityWeight;
                                }

                                // Menambahkan total bobot prioritas kriteria saat ini ke dalam array
                                $totalPriorityWeights[$criterion2->id] = number_format(
                                    $totalPriorityWeightForCriterion / $countCriteria,
                                    4,
                                );
                            }

                            // Menyimpan bobot prioritas
                            $totalConsistencyMeasure = [];

                            // Iterasi untuk setiap kriteria
                            foreach ($criteria as $criterion6) {
                                // Inisialisasi total bobot prioritas untuk kriteria saat ini
                                $totalConsistencyMeasureForCriterion = 0;

                                // Perhitungan bobot prioritas untuk setiap kriteria pada baris saat ini
                                foreach ($criteria as $criterion7) {
                                    $colName3 = 'W' . $criterion7->id;
                                    $weight3 = $value->where('id', $criterion6->id)->first();
                                    $consistencyMeasure = isset($weight3->$colName3)
                                        ? $weight3->$colName3 * $totalPriorityWeights[$criterion7->id]
                                        : 0;
                                    // Menambahkan bobot prioritas ke total bobot prioritas untuk kriteria saat ini
                                    $totalConsistencyMeasureForCriterion += $consistencyMeasure;
                                }

                                // Menambahkan total bobot prioritas kriteria saat ini ke dalam array
                                $totalConsistencyMeasure[$criterion6->id] = number_format(
                                    $totalConsistencyMeasureForCriterion / $totalPriorityWeights[$criterion6->id],
                                    4,
                                );
                            }
                        @endphp
                        <td class="px-6 py-4 text-center">
                            {{ number_format($totalPriorityWeights[$criterion1->id], 4) }}
                        </td>

                        <td class="px-6 py-4 text-center">
                            {{ number_format($totalConsistencyMeasure[$criterion1->id], 4) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <h1 class="mb-7 mt-20 text-4xl font-semibold">Calculation</h1>
    @php
        $countConsistencyMeasure = 0;

        // Loop untuk setiap nilai dalam array $totalConsistencyMeasure
        foreach ($totalConsistencyMeasure as $measure) {
            // Menambahkan nilai saat ini ke total
            $countConsistencyMeasure += $measure;
        }
        $lambdaMax = $countConsistencyMeasure / $countCriteria;
        $consistencyIndex = ($lambdaMax - $countCriteria) / ($countCriteria - 1);
        $ratioIndexValues = [
            1 => 0,
            2 => 0,
            3 => 0.5799,
            4 => 0.8921,
            5 => 1.1159,
            6 => 1.2358,
            7 => 1.3322,
            8 => 1.3952,
            9 => 1.4537,
            10 => 1.4882,
            11 => 1.5117,
            12 => 1.5356,
            13 => 1.5571,
            14 => 1.5714,
            15 => 1.5861,
        ];

        // Mengambil nilai $ratioIndex dari array berdasarkan jumlah kriteria
        $ratioIndex = isset($ratioIndexValues[$countCriteria]) ? $ratioIndexValues[$countCriteria] : 1.5861;

    @endphp
    @if ($consistencyIndex / $ratioIndex >= 0 && $consistencyIndex / $ratioIndex <= 1)
        <h1 class="mb-3 text-lg font-medium text-dark">
            Because the Consistency Ratio (CR) value is in the range 0 to 1, the comparison given for the criteria is
            consistent.
        </h1>
    @else
        <h1 class="mb-3 text-lg font-medium text-red-500">
            Given the Consistency Ratio (CR) outside the 0 to 1 range, a reassessment of criteria comparisons is advised for
            enhanced consistency.
        </h1>
    @endif
    <div class="w-[40vw] overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">

                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Value
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white text-xl hover:bg-gray-50">
                    <th class="w-[18vw] bg-dark px-6 py-4 text-left text-white">
                        Consistency Index (CI)
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{ number_format($consistencyIndex, 4) }}
                    </td>
                </tr>
                <tr class="bg-white text-xl hover:bg-gray-50">
                    <th class="w-[18vw] bg-dark px-6 py-4 text-left text-white">
                        Ratio Index (RI)
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{ number_format($ratioIndex, 4) }}
                    </td>
                </tr>
                <tr class="bg-white text-xl hover:bg-gray-50">
                    <th class="w-[18vw] bg-dark px-6 py-4 text-left text-white">
                        Consistency Ratio (CR)
                    </th>
                    <td class="px-6 py-4 text-center">
                        {{ number_format($consistencyIndex / $ratioIndex, 4) }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
