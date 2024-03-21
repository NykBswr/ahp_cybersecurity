@extends('layout.main')

@section('container')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <body class="h-screen w-full bg-background-predict bg-cover bg-no-repeat object-fill">

        @include('partials.sidebar')

        <div class="bg-predict h-screen w-auto bg-white p-10 sm:ml-64">
            <h1 class="mb-5 text-3xl font-semibold">Kriteria</h1>
            <div class="rounded-lg">
                <table class="w-full text-center text-sm rtl:text-right">
                    <thead class="bg-gray-50 text-xs uppercase text-dark">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Kode
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-dark">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-50">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-dark">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-50">
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-dark">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                $99
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#"
                                    class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
