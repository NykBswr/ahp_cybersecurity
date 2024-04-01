@foreach ($criteria as $criteriaMain)
    <div id="{{ $criteriaMain->code }}Calculation" class="content">
        <h1 class="mb-10 text-4xl font-semibold">Criteria Matrix</h1>
        <div class="overflow-x-auto rounded-xl shadow-md">
            <table class="w-full border-b text-lg">
                <thead class="bg-dark text-xl text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left">

                        </th>
                        @foreach ($alternative as $alternatives)
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ $alternatives->name }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternative as $alternatives1)
                        <tr class="bg-white hover:bg-gray-50">
                            <th class="px-6 py-4 text-center text-xl">
                                {{ $alternatives1->name }}
                            </th>
                            @foreach ($alternative as $alternatives2)
                                <td class="px-6 py-4 text-center">
                                    @php
                                        $colName = 'C' . $criteriaMain->id;
                                        $weight = $alternative->where('id', $alternatives2->id)->first();
                                        $weight2 = $alternative->where('id', $alternatives1->id)->first();
                                    @endphp
                                    @if ($weight && $weight2)
                                        {{ isset($weight->$colName) && isset($weight2->$colName) ? number_format($weight->$colName / $weight2->$colName, 4) : 0 }}
                                    @else
                                        0
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach

                    <tr class="bg-white text-xl hover:bg-gray-50">
                        <th class="border-t-2 border-dark px-6 py-4 text-center">
                            Total
                        </th>
                        @foreach ($alternative as $alternativesX)
                            <th class="border-t-2 border-dark px-6 py-4 text-center">
                                @php
                                    $totalCriteriaWeights = [];
                                    foreach ($alternative as $alternatives3) {
                                        $totalC = 0;
                                        foreach ($alternative as $alternatives4) {
                                            $colName = 'C' . $criteriaMain->id;
                                            $weight = $alternative->where('id', $alternatives3->id)->first();
                                            $weight2 = $alternative->where('id', $alternatives4->id)->first();
                                            $total =
                                                isset($weight->$colName) && isset($weight2->$colName)
                                                    ? $weight->$colName / $weight2->$colName
                                                    : 0;
                                            $totalC += $total;
                                        }

                                        // Menambahkan total bobot prioritas kriteria saat ini ke dalam array
                                        $totalCriteriaWeights[$alternatives3->id] = $totalC;
                                    }
                                @endphp
                                {{ number_format($totalCriteriaWeights[$alternativesX->id], 4) }}
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
                        @foreach ($alternative as $alternatives)
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ $alternatives->name }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternative as $alternatives)
                        <tr class="bg-white hover:bg-gray-50">
                            <th class="bg-dark px-6 py-4 text-center text-xl text-white">
                                {{ $alternatives->name }}
                            </th>
                            @foreach ($alternative as $alternatives2)
                                <td class="px-6 py-4 text-center">
                                    @php
                                        $colName = 'C' . $criteriaMain->id;
                                        $weight = $alternative->where('id', $alternatives2->id)->first();
                                        $weight2 = $alternative->where('id', $alternatives->id)->first();
                                        $normalWeight = $weight->$colName / $weight2->$colName;
                                    @endphp
                                    @if ($weight && $weight2)
                                        {{ isset($weight->$colName) && isset($weight2->$colName) ? number_format($normalWeight / $totalCriteriaWeights[$alternatives2->id], 4) : 0 }}
                                    @else
                                        0
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h1 class="mb-10 mt-20 text-4xl font-semibold">Priority Weight Matrix</h1>
        <div class="w-[30vw] overflow-x-auto rounded-xl shadow-md">
            <table class="w-full border-b text-lg">
                <thead class="bg-dark text-xl text-white">
                    <tr>
                        <th scope="col" class="w-[15vw] px-6 py-3 text-left">

                        </th>
                        <th scope="col" class="w-[15vw] px-6 py-3 text-center">
                            Priority Weight
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alternative as $alternatives)
                        <tr class="bg-white hover:bg-gray-50">
                            <th class="bg-dark px-6 py-4 text-center text-xl text-white">
                                {{ $alternatives->name }}
                            </th>
                            @php
                                $countAlternative = count($alternative);

                                // Menyimpan bobot prioritas
                                ${'totalPWAlternative' . $criteriaMain->code} = [];

                                // Iterasi untuk setiap kriteria
                                foreach ($alternative as $alternatives1) {
                                    // Inisialisasi total bobot prioritas untuk kriteria saat ini
                                    $totalPriorityWeightForAlternative = 0;

                                    // Perhitungan bobot prioritas untuk setiap kriteria pada baris saat ini
                                    foreach ($alternative as $alternatives2) {
                                        $colName = 'C' . $criteriaMain->id;
                                        $weight = $alternative->where('id', $alternatives2->id)->first();
                                        $weight2 = $alternative->where('id', $alternatives1->id)->first();
                                        $normalWeight = $weight->$colName / $weight2->$colName;
                                        $priorityWeight = isset($normalWeight)
                                            ? $normalWeight / $totalCriteriaWeights[$alternatives2->id]
                                            : 0;
                                        // Menambahkan bobot prioritas ke total bobot prioritas untuk kriteria saat ini
                                        $totalPriorityWeightForAlternative += $priorityWeight;
                                    }

                                    // Menambahkan total bobot prioritas kriteria saat ini ke dalam array
                                    ${'totalPWAlternative' . $criteriaMain->code}[$alternatives1->id] =
                                        $totalPriorityWeightForAlternative / $countAlternative;
                                }
                            @endphp
                            <td class="px-6 py-4 text-center">
                                {{ number_format(${'totalPWAlternative' . $criteriaMain->code}[$alternatives->id], 4) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endforeach

<div id="rangkingCalculation" class="content">
    @php
        // Perulangan untuk setiap kriteria
        foreach ($criteria as $criterion1) {
            foreach ($criteria as $criterion2) {
                $colName = 'W' . $criterion2->id;
                $weight = $value->where('id', $criterion1->id)->first();
                // Menyimpan total dari masing-masing kolom
                $columnTotals = [];
                foreach ($criteria as $criterion3) {
                    $weight2 = $value->where('id', $criterion3->id)->first();
                    foreach ($criteria as $criterion4) {
                        $colName2 = 'W' . $criterion4->id;
                        $columnTotals[$criterion4->id] = isset($columnTotals[$criterion4->id])
                            ? $columnTotals[$criterion4->id] + (isset($weight2->$colName2) ? $weight2->$colName2 : 0)
                            : (isset($weight2->$colName2)
                                ? $weight2->$colName2
                                : 0);
                    }
                }
            }
        }
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
                $priorityWeight = isset($weight->$colName) ? $weight->$colName / $columnTotals[$criterion3->id] : 0;
                // Menambahkan bobot prioritas ke total bobot prioritas untuk kriteria saat ini
                $totalPriorityWeightForCriterion += $priorityWeight;
            }

            // Menambahkan total bobot prioritas kriteria saat ini ke dalam array
            $totalPriorityWeights[$criterion2->id] = $totalPriorityWeightForCriterion / $countCriteria;
        }
        // Inisialisasi array untuk menyimpan nilai alternatif beserta indeksnya
        $valuesWithIndices = [];
        // Iterasi untuk setiap alternatif
        foreach ($alternative as $index => $alternatives) {
            // Hitung total nilai alternatif untuk perhitungan peringkat
            $totalValues = 0;
            foreach ($criteria as $criterion2) {
                $totalValues +=
                    ${'totalPWAlternative' . $criterion2->code}[$alternatives->id] *
                    $totalPriorityWeights[$criterion2->id];
                $alternativeId = $alternatives->id;
                $alternativeName = $alternatives->name;
                $alternativeCode = $alternatives->code;
            }
            // Simpan nilai alternatif dan indeksnya ke dalam array
            $valuesWithIndices[] = [
                'index' => $index,
                'value' => $totalValues,
                'alternativeId' => $alternativeId,
                'alternativeName' => $alternativeName,
                'alternativeCode' => $alternativeCode,
            ];
        }
        // Urutkan array berdasarkan nilai dari yang terbesar ke yang terkecil
        usort($valuesWithIndices, function ($a, $b) {
            return $b['value'] <=> $a['value'];
        });
        // Inisialisasi peringkat awal
        $ranking = 1;
    @endphp
    {{-- <h1 class="mb-10 text-4xl font-semibold">Priority Weight</h1>
    <div class="overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    @foreach ($criteria as $criterion)
                        <th scope="col" class="px-6 py-3 text-center">
                            {{ $criterion->name }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-gray-50">
                    @foreach ($criteria as $weightC)
                        <th class="px-6 py-4 text-center text-lg">
                            {{ number_format($totalPriorityWeights[$weightC->id], 4) }}
                        </th>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div> --}}
    <h1 class="my-10 text-4xl font-semibold">Ranking</h1>
    <div class="overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Code
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Name
                    </th>
                    @foreach ($criteria as $criterion)
                        <th scope="col" class="px-6 py-3 text-center">
                            {{ $criterion->name }}
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3 text-center">
                        Value
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Ranking
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternative as $index => $alternatives)
                    <tr class="bg-white hover:bg-gray-50">
                        <th class="px-6 py-4 text-center text-lg">
                            {{ $valuesWithIndices[$index]['alternativeCode'] }}
                        </th>
                        <th class="px-6 py-4 text-center text-lg">
                            {{ $valuesWithIndices[$index]['alternativeName'] }}
                        </th>
                        @foreach ($criteria as $criterion)
                            <th scope="col" class="px-6 py-3 text-center">
                                {{ number_format(${'totalPWAlternative' . $criterion->code}[$valuesWithIndices[$index]['alternativeId']] * $totalPriorityWeights[$criterion->id], 4) }}
                            </th>
                        @endforeach
                        <th class="px-6 py-4 text-center text-lg">
                            <!-- Menampilkan peringkat berdasarkan indeks dalam array yang telah diurutkan -->
                            {{ number_format($valuesWithIndices[$index]['value'], 4) }}
                        </th>
                        <th class="px-6 py-4 text-center text-lg">
                            <!-- Menampilkan peringkat berdasarkan indeks dalam array yang telah diurutkan -->
                            {{ $ranking++ }}
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
