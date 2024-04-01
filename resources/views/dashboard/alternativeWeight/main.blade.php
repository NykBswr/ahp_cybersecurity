@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Alternative Weight Value</h1>

    @include('partials.alerts')

    <div class="relative max-h-[70vh] overflow-x-auto overflow-y-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">
                        Code
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Name
                    </th>
                    @foreach ($criteria as $criterias)
                        <th scope="col" class="px-6 py-3 text-center">
                            {{ $criterias->name }}
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alternative as $alternative)
                    <tr class="bg-white hover:bg-gray-50">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                            {{ $alternative->code }}
                        </th>
                        <td class="px-6 py-4 text-left">
                            {{ $alternative->name }}
                        </td>
                        @foreach ($criteria as $weight)
                            @php
                                $colName = 'C' . $weight->id;
                            @endphp
                            <td scope="col" class="px-6 py-3 text-center">
                                @if ($alternative->$colName == null)
                                    0
                                @else
                                    {{ $alternative->$colName }}
                                @endif
                            </td>
                        @endforeach
                        <td class="px-6 py-4 text-center">
                            {{-- Update Modal --}}
                            <button data-modal-target="crud-modal{{ $alternative->name }}"
                                data-modal-toggle="crud-modal{{ $alternative->name }}"
                                class="mr-1 font-medium hover:text-blue-500 hover:underline" type="button">
                                Update
                            </button>
                            <div id="crud-modal{{ $alternative->name }}" tabindex="-1" aria-hidden="true"
                                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <div class="relative rounded-lg bg-white shadow">
                                        <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                                            <h3 class="text-lg font-semibold text-dark">
                                                Update Alternative
                                            </h3>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-dark hover:bg-gray-100"
                                                data-modal-toggle="crud-modal{{ $alternative->name }}">
                                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <form method="POST"
                                            action="/dashboard/alternativeWeight/added/{{ $alternative->id }}"
                                            class="p-4 text-start md:p-5">
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-4 grid grid-cols-2 gap-4">
                                                <div class="col-span-2">
                                                    <label for="code"
                                                        class="mb-2 block text-base font-medium text-dark">Code</label>
                                                    <input type="text" name="code" id="code"
                                                        class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                                        placeholder="{{ $alternative->code }}">
                                                </div>
                                                <div class="col-span-2">
                                                    <label for="name"
                                                        class="mb-2 block text-base font-medium text-dark">Name</label>
                                                    <input type="text" name="name" id="name"
                                                        class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                                        placeholder="{{ $alternative->name }}">
                                                </div>
                                            </div>
                                            @foreach ($criteria as $criatians)
                                                @php
                                                    $colName = 'C' . $criatians->id;
                                                @endphp
                                                <label for="{{ $colName }}"
                                                    class="mb-2 block text-base font-medium text-dark">
                                                    {{ $criatians->name }} Value</label>
                                                <div class="relative mb-5 flex items-center">
                                                    <button type="button" id="decrement-button"
                                                        data-input-counter-decrement="{{ $colName }}"
                                                        class="h-11 rounded-s-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                                        <svg class="h-3 w-3 text-dark" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                    <input type="number" id="{{ $colName }}"
                                                        name='{{ $colName }}' data-input-counter
                                                        data-input-counter-min="0" data-input-counter-max="10"
                                                        class="block h-11 w-full border-x-0 border-dark bg-gray-50 text-center text-sm font-medium text-dark focus:border-dark focus:ring-2 focus:ring-dark"
                                                        placeholder=""
                                                        value="{{ isset($alternative->$colName) ? $alternative->$colName : 0 }}"
                                                        required />
                                                    <button type="button" id="increment-button"
                                                        data-input-counter-increment="{{ $colName }}"
                                                        class="h-11 rounded-e-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                                        <svg class="h-3 w-3 text-dark" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            @endforeach
                                            <button type="submit"
                                                class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-base font-medium text-white hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-400">
                                                Update
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End of Update Modal --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-10 flex w-full flex-row justify-between">
        <a href="/dashboard/alternative">
            <div class="gradcolor rounded-lg bg-dark px-6 py-2 text-lg font-semibold text-white hover:text-white">
                Back
            </div>
        </a>
        <a href="/dashboard/calculate">
            <div class="gradcolor rounded-lg bg-dark px-6 py-2 text-lg font-semibold text-white hover:text-white">
                Next
            </div>
        </a>
    </div>
@endsection
