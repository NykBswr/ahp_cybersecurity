@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Criteria Weight Value</h1>
    <div class="relative overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">

                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Integrity
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Availability
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Scalability
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-gray-100">
                    <th scope="row" class="whitespace-nowrap px-6 py-4 text-center text-xl font-semibold">
                        Integrity
                    </th>
                    <td class="bg-dark px-6 py-4 text-center text-white">
                        2.9
                    </td>
                    <td class="px-6 py-4 text-center">
                        1.0
                    </td>
                    <td class="px-6 py-4 text-center">
                        6.0
                    </td>
                </tr>
                <tr class="bg-white hover:bg-gray-100">
                    <th scope="row" class="whitespace-nowrap px-6 py-4 text-center text-xl font-semibold">
                        Availability
                    </th>
                    <td class="bg-dark px-6 py-4 text-center text-white">
                        1.2
                    </td>
                    <td class="bg-dark px-6 py-4 text-center text-white">
                        2.7
                    </td>
                    <td class="px-6 py-4 text-center">
                        7.2
                    </td>
                </tr>
                <tr class="bg-white hover:bg-gray-100">
                    <th scope="row" class="whitespace-nowrap px-6 py-4 text-center text-xl font-semibold">
                        Scalability
                    </th>
                    <td class="bg-dark px-6 py-4 text-center text-white">
                        0.8
                    </td>
                    <td class="bg-dark px-6 py-4 text-center text-white">
                        1.1
                    </td>
                    <td class="bg-dark px-6 py-4 text-center text-white">
                        5.1
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
