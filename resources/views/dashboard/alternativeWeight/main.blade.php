@extends('dashboard.layout.main')

@section('dashboard')

    <div class="bg-predict relative h-screen w-auto bg-white p-14 sm:ml-72">
        <h1 class="mb-10 text-4xl font-semibold">Alternative Weight Value</h1>
        <div class="relative overflow-x-auto rounded-xl shadow-md">
            <table class="w-full border-b text-lg">
                <thead class="bg-dark text-xl text-white">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left">
                            Code
                        </th>
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
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white hover:bg-gray-50">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                            C0
                        </th>
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
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="mr-1 font-medium hover:text-blue-500 hover:underline">Update</a>
                        </td>
                    </tr>
                    <tr class="bg-white hover:bg-gray-50">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                            C1
                        </th>
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
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="mr-1 font-medium hover:text-blue-500 hover:underline">Update</a>
                        </td>
                    </tr>
                    <tr class="bg-white hover:bg-gray-50">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                            C2
                        </th>
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
                        <td class="px-6 py-4 text-center">
                            <a href="#" class="mr-1 font-medium hover:text-blue-500 hover:underline">Update</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
