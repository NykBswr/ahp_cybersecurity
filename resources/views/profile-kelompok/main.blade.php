@extends('layout.main')

@section('container')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <body class="max-w-screen h-screen w-full scroll-smooth bg-background-profile bg-cover bg-no-repeat object-fill">

        @include('profile-kelompok.partials.nav')
        @include('profile-kelompok.home')
        @include('profile-kelompok.aboutUs')
        @include('profile-kelompok.ourTeam')
        @include('profile-kelompok.partials.footers')

        <script>
            const navbar = document.querySelector('.navbar');
            const subNav = document.querySelector('.subNav');
            const home = document.querySelector('.homeSec');
            const isiNav1 = document.querySelector('.isiNav1');
            const isiNav2 = document.querySelector('.isiNav2');
            const isiNav3 = document.querySelector('.isiNav3');

            const initialNavbarPosition = navbar.offsetTop;

            window.addEventListener('scroll', function() {
                const scrolledPastNavbar = window.pageYOffset > initialNavbarPosition;

                subNav.classList.toggle('items-end', scrolledPastNavbar);
                subNav.classList.toggle('bg-white', scrolledPastNavbar);
                subNav.classList.toggle('px-5', scrolledPastNavbar);
                subNav.classList.toggle('rounded-xl', scrolledPastNavbar);
                subNav.classList.toggle('bg-opacity-5', scrolledPastNavbar);
                subNav.classList.toggle('py-2', scrolledPastNavbar);

                navbar.classList.toggle('h-auto', scrolledPastNavbar);
                navbar.classList.toggle('mb-0', scrolledPastNavbar);
                navbar.classList.toggle('bottom-0', scrolledPastNavbar);
                navbar.classList.toggle('bg-none', scrolledPastNavbar);
                navbar.classList.toggle('flex', scrolledPastNavbar);
                navbar.classList.toggle('justify-center', scrolledPastNavbar);
                navbar.classList.toggle('items-end', scrolledPastNavbar);
                navbar.classList.toggle('fixed', scrolledPastNavbar);

                home.classList.toggle('mt-32', scrolledPastNavbar);

                [isiNav1, isiNav2, isiNav3].forEach(isiNav => {
                    isiNav.classList.toggle('border-b-8', !scrolledPastNavbar);
                    isiNav.classList.toggle('border-purple1', !scrolledPastNavbar);
                    isiNav.classList.toggle('hover:border-purple2', !scrolledPastNavbar);
                    isiNav.classList.toggle('pb-5', !scrolledPastNavbar);
                    isiNav.classList.toggle('px-16', !scrolledPastNavbar);
                    isiNav.classList.toggle('hover:text-purple2', !scrolledPastNavbar);
                    isiNav.classList.toggle('bg-purple1', scrolledPastNavbar);
                    isiNav.classList.toggle('py-2', scrolledPastNavbar);
                    isiNav.classList.toggle('rounded-xl', scrolledPastNavbar);
                    isiNav.classList.toggle('hover:bg-purple2', scrolledPastNavbar);
                    isiNav.classList.toggle('px-10', scrolledPastNavbar);
                    isiNav.classList.toggle('mr-3', scrolledPastNavbar);
                });
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
    </body>
