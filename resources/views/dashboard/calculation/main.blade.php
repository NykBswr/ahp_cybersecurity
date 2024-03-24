@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Criteria Matrix</h1>
    <div class="overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">
                        Name
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
                <tr class="bg-white hover:bg-gray-50">
                    <td class="px-6 py-4 text-left">
                        Alternative 1
                    </td>
                    <td class="px-6 py-4 text-center">
                        2.9
                    </td>
                    <td class="px-6 py-4 text-center">
                        1.0
                    </td>
                    <td class="px-6 py-4 text-center">
                        6.0
                    </td>
                </tr>
                <tr class="bg-white hover:bg-gray-50">
                    <td class="px-6 py-4 text-left">
                        Alternative 2
                    </td>
                    <td class="px-6 py-4 text-center">
                        1.2
                    </td>
                    <td class="px-6 py-4 text-center">
                        2.7
                    </td>
                    <td class="px-6 py-4 text-center">
                        7.2
                    </td>
                </tr>
                <tr class="bg-white hover:bg-gray-50">
                    <td class="px-6 py-4 text-left">
                        Alternative 3
                    </td>
                    <td class="px-6 py-4 text-center">
                        0.8
                    </td>
                    <td class="px-6 py-4 text-center">
                        1.1
                    </td>
                    <td class="px-6 py-4 text-center">
                        5.1
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
