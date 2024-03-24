@extends('layout.main')

@section('container')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <body class="h-screen w-full bg-background-predict bg-cover bg-no-repeat object-fill">

        @include('partials.sidebar')

        <div class="bg-predict relative h-screen w-auto bg-white p-14 sm:ml-72">
            @yield('dashboard')
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
