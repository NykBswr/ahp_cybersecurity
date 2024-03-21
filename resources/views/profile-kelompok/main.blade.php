@extends('layout.main')

@section('container')

    <body class="h-screen w-full bg-background-profile bg-cover bg-no-repeat object-fill">
        <nav class="h-auto w-auto py-8">
            <div class="flex flex-row items-center justify-center">
                <a class="h-14 w-52 border-b-8 border-purple2 text-center text-2xl font-semibold uppercase text-white hover:border-purple2 hover:text-purple2"
                    href="#home">Home</a>
                <a class="h-14 w-52 border-b-8 border-purple1 text-center text-2xl font-semibold uppercase text-white hover:border-purple2 hover:text-purple2"
                    href="#about">About</a>
                <a class="h-14 w-52 border-b-8 border-purple1 text-center text-2xl font-semibold uppercase text-white hover:border-purple2 hover:text-purple2"
                    href="/dashboard">Analyst</a>
            </div>
        </nav>
        <section id="home" class="h-screen w-full py-24">
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
        <section id="about" class="h-screen w-full px-20 py-36">
            <h1 class="text-center text-6xl font-bold text-white">About</h1>
            <div class="flex py-20">
                <div class="mx-10 w-1/2">
                    <h1 class="text-2xl font-semibold text-white">Lorem Ipsum Dolor Sit Amet, Consectetur</h1>
                    <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet, consectetur
                        adipiscing
                        elit. Ut
                        pellentesque lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque lorem ipsum dolor
                        sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                        pellentesque lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque lorem ipsum dolor
                        sit amet consectetur adipiscing elit.</p>
                    <div class="mt-14 w-full items-center justify-center rounded-lg border border-white p-5">
                        <h1 class="text-center text-2xl font-semibold text-white">Lorem Ipsum</h1>
                        <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet, consectetur
                            adipiscing
                            elit. Ut
                            pellentesque lorem ipsum dolor sit
                            amet consectetur adipiscing elit pellentesque lorem ipsum dolor adipiscing elit. </p>
                    </div>
                </div>
                <div class="flex w-1/2 flex-col items-center justify-center">
                    <img class="absolute z-20 mb-60" src="{{ URL::asset('/img/Shield.svg') }}" alt="">
                    <img class="absolute z-10 mb-20" src="{{ URL::asset('/img/Top.svg') }}" alt="">
                    <img class="absolute z-10 mt-40" src="{{ URL::asset('/img/Buttom.svg') }}" alt="">
                    <img class="z-[5] mt-40" src="{{ URL::asset('/img/Buttom Planet.svg') }}" alt="">
                </div>
            </div>
        </section>
        <section id="ourteam" class="h-screen w-full px-20 py-24">
            <div class="flex py-32">
                <div class="w-1/2">
                    <h1 class="mb-10 text-start text-6xl font-bold text-white">Our Team</h1>
                    <div class="flex items-center justify-start pl-64">
                        <div class="mt-56 flex flex-col items-center justify-center">
                            <img class="absolute z-10" src="{{ URL::asset('/img/First layer.svg') }}" alt="">
                            <img class="absolute z-10" src="{{ URL::asset('/img/Second Layer.svg') }}" alt="">
                            <img class="absolute z-[20]" src="{{ URL::asset('/img/Boxes.svg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/2">
                    <div class="flex">
                        <div class='relative mr-0 mt-5 h-full w-[20rem] lg:mr-5'>
                            <div class='shadowBotPurple relative z-[1] h-[20rem] w-[20rem] bg-cover bg-no-repeat p-5'>
                                <div class='profileStat flex h-full w-full items-end'>
                                    <div class='h-auto w-full items-center justify-center'>
                                        <!-- <div class='garisStat flex w-full items-center justify-center'>
                                                                        <div class='mt-3 w-[15rem] border border-b border-white'></div>
                                                                    </div> -->
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
                                        <!-- <div class='garisStat flex w-full items-center justify-center'>
                                                                        <div class='mt-3 w-[15rem] border border-b border-white'></div>
                                                                    </div> -->
                                        <div class='adStat flex w-full flex-row items-stretch justify-center'>
                                            <h1 class='mb-5 text-center text-3xl font-bold text-white'>Nayaka Baswara</h1>
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
                                        <!-- <div class='garisStat flex w-full items-center justify-center'>
                                                                        <div class='mt-3 w-[15rem] border border-b border-white'></div>
                                                                    </div> -->
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
                                        <!-- <div class='garisStat flex w-full items-center justify-center'>
                                                                        <div class='mt-3 w-[15rem] border border-b border-white'></div>
                                                                    </div> -->
                                        <div class='adStat flex w-full flex-row items-stretch justify-center'>
                                            <h1 class='mb-5 text-center text-3xl font-bold text-white'>Nayaka Baswara</h1>
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
        <footer class="w-full px-20 pb-10 pt-36">
            <div class="border-2 border-b border-purple2"></div>
            <h1 class="py-5 text-center font-bold text-white">© 2024 NykBswr. All rights reserved.</h1>
        </footer>
    </body>
