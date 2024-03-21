@extends('layout.main')

@section('container')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <body class="h-screen w-full bg-background-predict bg-cover bg-no-repeat object-fill">

        @include('partials.sidebar')

        @yield('dashboard')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    </body>
