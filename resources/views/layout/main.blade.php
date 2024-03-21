<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHP Project</title>
    <link rel="stylesheet" href="dist/css/output.css">

    {{-- CSS Tailwind --}}
    @vite('resources/css/app.css')
    <!-- End layout styles -->

    <link rel="icon" href="{{ asset('img/logo.png') }}" />
</head>

@yield('container')
<script src="{{ asset('js/script.js') }}"></script>

</html>
