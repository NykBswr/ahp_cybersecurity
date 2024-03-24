@extends('layout.main')

@section('container')

    <body class="h-screen w-full scroll-smooth bg-background-profile bg-cover bg-no-repeat object-fill">
        <nav class="navbar z-[25] h-auto w-full py-10">
            <div class="subNav flex flex-row items-center justify-center">
                <div class="flex px-5 py-3">
                    <a class="isiNav1 text-center text-2xl font-semibold uppercase text-white" href="#home">Home</a>
                    <a class="isiNav2 text-center text-2xl font-semibold uppercase text-white" href="#about">About</a>
                    <a class="isiNav3 text-center text-2xl font-semibold uppercase text-white" href="/dashboard">Analyst</a>
                </div>
            </div>
        </nav>
        <section id="home" class="homeSec h-screen w-full">
            <div class="absolute flex w-full items-center justify-center">
                <img class="h-auto w-auto" src="{{ URL::asset('/img/Stars Background.svg') }}" alt="">
            </div>
            <div class="flex flex-col items-center">
                <div class="absolute mt-12 flex flex-col items-center justify-start">
                    <h1 class="text-center text-8xl font-bold text-white">We Help Analyze</h1>
                    <h1 class="text-center text-8xl font-bold text-white">Best Security</h1>
                    <h1 class="text-center text-8xl font-bold text-white">Investment</h1>
                </div>
                <div class="mt-64 flex items-center justify-center">
                    <img class="absolute mb-14" src="{{ URL::asset('/img/Key.svg') }}" alt="">
                    <img class="absolute mb-14" src="{{ URL::asset('/img/Stars.svg') }}" alt="">
                    <img class="" src="{{ URL::asset('/img/Planet.svg') }}" alt="">
                </div>
            </div>
        </section>
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

                navbar.classList.toggle('h-auto', !scrolledPastNavbar);
                navbar.classList.toggle('mb-14', scrolledPastNavbar);
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
        <section id="about" class="h-screen w-full px-20 py-36">
            <h1 class="text-center text-6xl font-bold text-white">About</h1>
            <div class="flex py-20">
                <div class="w-1/2 px-10">
                    <h1 class="text-4xl font-semibold text-white">Lorem Ipsum</h1>
                    <h1 class="text-4xl font-semibold text-white">Dolor Sit Amet, Consectetur</h1>
                    <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Ut
                        pellentesque lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque lorem ipsum dolor
                        sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                        pellentesque lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque lorem ipsum dolor
                        sit amet consectetur adipiscing elit.</p>
                    <div
                        class="gradcolor2 mt-14 w-full items-center justify-center rounded-xl bg-gradient-to-tr from-[#BB381E] to-[#B0A5F7] p-5">
                        <div class="px-5 py-2">
                            <h1 class="text-center text-2xl font-semibold text-white">Lorem Ipsum</h1>
                            <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing
                                elit. Ut
                                pellentesque lorem ipsum dolor sit
                                amet consectetur adipiscing elit pellentesque lorem ipsum dolor adipiscing elit. </p>
                        </div>
                    </div>
                </div>
                <div class="flex w-1/2 flex-col items-center justify-center px-10">
                    <img class="absolute z-20 mb-60 h-auto w-80" src="{{ URL::asset('/img/Shield.svg') }}" alt="">
                    <img class="absolute z-10 mb-20 h-auto w-80" src="{{ URL::asset('/img/Top.svg') }}" alt="">
                    <img class="absolute z-10 mt-40 h-auto w-80" src="{{ URL::asset('/img/Buttom.svg') }}" alt="">
                    <img class="z-[5] mt-40 h-auto w-full" src="{{ URL::asset('/img/Buttom Planet.svg') }}" alt="">
                </div>
            </div>
        </section>
        <section id="ourteam" class="mb-52 h-screen w-full px-20 py-24">
            <div class="flex pt-44">
                <div class="w-1/2 px-10">
                    <h1 class="mb-10 text-start text-6xl font-bold text-white">Our Team</h1>
                    <div class="flex items-center justify-start pl-64">
                        <div class="mt-56 flex flex-col items-center justify-center">
                            <img class="absolute z-10 mb-2" src="{{ URL::asset('/img/First layer.svg') }}" alt="">
                            <img class="absolute z-10" src="{{ URL::asset('/img/Second Layer.svg') }}" alt="">
                            <img class="absolute z-[20] mt-10" src="{{ URL::asset('/img/Boxes.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="flex">
                        <div class='relative mr-0 mt-5 h-full w-[20rem] lg:mr-5'>
                            <div class='shadowBotPurple relative z-[1] h-[20rem] w-[20rem] bg-cover bg-no-repeat p-5'>
                                <div class='profileStat flex h-full w-full items-end'>
                                    <div class='h-auto w-full items-center justify-center'>
                                        <div class='adStat flex w-full flex-row items-stretch justify-center'>
                                            <h1 class='text-center text-3xl font-bold text-white'>Lintang Sabrang
                                                Kinasih Basuki</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class='absolute left-0 top-0 h-[20rem] w-[20rem] bg-cover bg-no-repeat'
                                src='/img/Rafik.svg'>
                        </div>
                        <div class='relative mr-0 mt-5 h-full w-[20rem] lg:mr-5'>
                            <div class='shadowBotPurple relative z-[1] h-[20rem] w-[20rem] bg-cover bg-no-repeat p-5'>
                                <div class='profileStat flex h-full w-full items-end'>
                                    <div class='h-auto w-full items-center justify-center'>
                                        <div class='adStat flex w-full flex-row items-stretch justify-center'>
                                            <h1 class='mb-5 text-center text-3xl font-bold text-white'>Rafik Septiana</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class='absolute left-0 top-0 h-[20rem] w-[20rem] bg-cover bg-no-repeat'
                                src='/img/Rafik.svg'>
                        </div>
                    </div>
                    <div class="flex">
                        <div class='relative mr-0 mt-5 h-full w-[20rem] lg:mr-5'>
                            <div class='shadowBotPurple relative z-[1] h-[20rem] w-[20rem] bg-cover bg-no-repeat p-5'>
                                <div class='profileStat flex h-full w-full items-end'>
                                    <div class='h-auto w-full items-center justify-center'>
                                        <div class='adStat flex w-full flex-row items-stretch justify-center'>
                                            <h1 class='mb-5 text-center text-3xl font-bold text-white'>Nayaka Baswara</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class='absolute left-0 top-0 h-[20rem] w-[20rem] bg-cover bg-no-repeat'
                                src='/img/Rafik.svg'>
                        </div>
                        <div class='relative mr-0 mt-5 h-full w-[20rem] lg:mr-5'>
                            <div class='shadowBotPurple relative z-[1] h-[20rem] w-[20rem] bg-cover bg-no-repeat p-5'>
                                <div class='profileStat flex h-full w-full items-end'>
                                    <div class='h-auto w-full items-center justify-center'>
                                        <div class='adStat flex w-full flex-row items-stretch justify-center'>
                                            <h1 class='text-center text-3xl font-bold text-white'>Janetha Maesha Purba
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class='absolute left-0 top-0 h-[20rem] w-[20rem] bg-cover bg-no-repeat'
                                src='/img/Rafik.svg'>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="w-full px-20 pb-10">
            <div class="border-2 border-b border-purple2"></div>
            <h1 class="pt-10 text-center font-bold text-white">© 2024 NykBswr. All rights reserved.</h1>
        </footer>
    </body>
