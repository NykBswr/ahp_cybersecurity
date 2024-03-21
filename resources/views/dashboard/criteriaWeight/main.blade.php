@extends('dashboard.layout.main')

@section('dashboard')

    <div class="bg-predict relative h-screen w-auto bg-white p-14 sm:ml-72">
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
                    <tr class="bg-white hover:bg-gray-50">
                        <th scope="row"
                            class="whitespace-nowrap bg-dark px-6 py-4 text-center text-xl font-semibold text-white">
                            Integrity
                        </th>
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
                        <th scope="row"
                            class="whitespace-nowrap bg-dark px-6 py-4 text-center text-xl font-semibold text-white">
                            Availability
                        </th>
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
                        <th scope="row"
                            class="whitespace-nowrap bg-dark px-6 py-4 text-center text-xl font-semibold text-white">
                            Scalability
                        </th>
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
    </div>
