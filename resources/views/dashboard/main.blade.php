@extends('layout.main')

@section('container')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <body class="h-screen w-full bg-background-predict bg-cover bg-no-repeat object-fill">

        @include('partials.sidebar')

        <div class="bg-predict relative h-screen w-auto bg-white p-14 sm:ml-72">
            <h1 class="mb-10 text-4xl font-semibold">Criteria</h1>
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
                                Integrity
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="#" class="mr-1 font-medium hover:text-blue-500 hover:underline">Update</a>
                                <a href="#" class="ml-1 font-medium hover:text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-50">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                                C1
                            </th>
                            <td class="px-6 py-4 text-left">
                                Availability
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="#" class="mr-1 font-medium hover:text-blue-500 hover:underline">Update</a>
                                <a href="#" class="ml-1 font-medium hover:text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-50">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                                C2
                            </th>
                            <td class="px-6 py-4 text-left">
                                Scalability
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="#" class="mr-1 font-medium hover:text-blue-500 hover:underline">Update</a>
                                <a href="#" class="ml-1 font-medium hover:text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-10 flex items-center justify-end">
                <button
                    class="gradcolor rounded-lg bg-dark px-6 py-2 text-lg font-semibold text-white hover:text-white">Create</button>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
