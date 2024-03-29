@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Criteria Weight Value</h1>

    @include('partials.alerts')

    <div class="relative overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th class="px-6 py-3 text-center">
                        @if ($criteria == '[]')
                            <h1 class="bg-dark text-xl text-white">First things first: create your criteria!</h1>
                        @endif
                    </th>
                    @foreach ($criteria as $criterion)
                        <th class="px-6 py-3 text-center">
                            {{ $criterion->name }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($criteria as $criterion1)
                    <tr class="bg-white hover:bg-gray-100">
                        <th class="whitespace-nowrap px-20 py-4 text-center text-xl font-semibold">
                            {{ $criterion1->name }}
                        </th>
                        @foreach ($criteria as $criterion2)
                            @if ($criterion1 === $criterion2)
                                <td class="bg-dark px-20 py-4 text-center text-white">
                                    1
                                </td>
                            @else
                                @php
                                    // Dapatkan nama kolom untuk perbandingan ini
                                    $columnName = $criterion1->id . '_' . $criterion2->id;
                                    // Dapatkan nilai dari kolom ini dari tabel CriteriaWeight
                                    $colName = 'W' . $criterion2->id;

                                    $weight = null;
                                    if ($value instanceof Illuminate\Database\Eloquent\Collection) {
                                        $weight = $value->where('id', $criterion1->id)->first();
                                    }
                                    // Cek apakah perlu input atau tidak tergantung pada posisi perbandingan
                                    $inputNeeded = $criterion1->id < $criterion2->id ? true : false;
                                @endphp
                                @if ($inputNeeded)
                                    <td class="p-0 text-center">
                                        <form method="POST" action="/dashboard/criteriaWeight/added/{{ $criterion1->id }}"
                                            class="relative mb-0 flex items-center justify-center">
                                            @csrf
                                            @method('PUT')
                                            {{-- <button type="button" id="decrement-button"
                                                data-input-counter-decrement="{{ $columnName }}"
                                                class="h-14 border border-dark bg-gray-100 p-3 outline outline-dark hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                                <svg class="h-3 w-3 text-dark" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                </svg>
                                            </button> --}}
                                            <input type="hidden" name="criterion1_id" value="{{ $criterion1->id }}">
                                            <input type="hidden" name="criterion2_id" value="{{ $criterion2->id }}">
                                            <input type="number" id="{{ $columnName }}" data-input-counter
                                                name={{ $criterion2->id }} data-input-counter-min="1"
                                                data-input-counter-max="10.0"
                                                class="block h-14 w-full border border-dark bg-gray-50 p-0 text-center text-base font-medium text-dark outline outline-dark focus:ring-2 focus:ring-dark"
                                                placeholder=""
                                                value="{{ isset($weight->$colName) ? $weight->$colName : 0 }}" required />
                                            {{-- <button type="button" id="increment-button"
                                                data-input-counter-increment="{{ $columnName }}"
                                                class="h-14 border border-dark bg-gray-100 p-3 outline outline-dark hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                                <svg class="h-3 w-3 text-dark" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                </svg>
                                            </button> --}}
                                        </form>
                                    </td>
                                @else
                                    <td class="bg-dark px-20 py-4 text-center text-white">
                                        @if ($weight->$colName > 0)
                                            {{ $weight->$colName }}
                                        @else
                                            0
                                        @endif
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
