<section id="about" class="h-screen w-full px-20 py-36">
    <h1 class="text-center text-6xl font-bold text-white" data-aos="fade-down" data-aos-anchor-placement="top-center"
        data-aos-easing="linear" data-aos-mirror="true" data-aos-duration="1500">About</h1>
    <div class="flex py-20">
        <div class="w-1/2 px-10">
            <div data-aos="fade-right" data-aos-mirror="true" data-aos-duration="1500">
                <h1 class="text-4xl font-semibold text-white">Lorem Ipsum</h1>
                <h1 class="text-4xl font-semibold text-white">Dolor Sit Amet, Consectetur</h1>
                <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet, consectetur
                    adipiscing
                    elit. Ut
                    pellentesque lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque lorem ipsum
                    dolor
                    sit amet consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Ut
                    pellentesque lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque lorem ipsum
                    dolor
                    sit amet consectetur adipiscing elit.</p>
            </div>

            <div id="animation-carousel" class="relative mt-14 w-full" data-carousel="static" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom" data-aos-mirror="true" data-aos-duration="1500">
                <!-- Carousel wrapper -->
                <div class="relative h-[13rem] overflow-hidden rounded-lg">
                    <!-- Item 1 -->
                    <div class="h-[13rem] w-full items-center justify-center rounded-xl bg-gradient-to-tr from-[#BB381E] to-[#B0A5F7] p-1 shadow-lg shadow-orange-400/50"
                        data-carousel-item>
                        <div class="h-[12.5rem] rounded-xl bg-darker px-10 py-7">
                            <h1 class="text-center text-2xl font-semibold text-white">Lorem Ipsum</h1>
                            <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing
                                elit. Ut
                                pellentesque lorem ipsum dolor sit
                                amet consectetur adipiscing elit pellentesque lorem ipsum dolor adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="h-[13rem] w-full items-center justify-center rounded-xl bg-gradient-to-tr from-[#BB381E] to-[#B0A5F7] p-1 shadow-lg shadow-orange-400/50"
                        data-carousel-item>
                        <div class="h-[12.5rem] rounded-xl bg-darker px-10 py-7">
                            <h1 class="text-center text-2xl font-semibold text-white">LNAYA</h1>
                            <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing
                                elit. Ut
                                pellentesque lorem ipsum dolor sit
                                amet consectetur adipiscing elit pellentesque lorem ipsum dolor adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="h-[13rem] w-full items-center justify-center rounded-xl bg-gradient-to-tr from-[#BB381E] to-[#B0A5F7] p-1 shadow-lg shadow-orange-400/50"
                        data-carousel-item>
                        <div class="h-[12.5rem] rounded-xl bg-darker px-10 py-7">
                            <h1 class="text-center text-2xl font-semibold text-white">Lorem Ipsum</h1>
                            <p class="mt-5 text-justify text-lg font-normal text-white">Lorem ipsum dolor sit amet,
                                consectetur
                                adipiscing
                                elit. Ut
                                pellentesque lorem ipsum dolor sit
                                amet consectetur adipiscing elit pellentesque lorem ipsum dolor adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <button type="button"
                    class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-prev>
                    <span class="inline-flex h-full w-36 items-center justify-center bg-transparent">
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-next>
                    <span class="inline-flex h-full w-36 items-center justify-center bg-transparent">
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <div class="flex w-1/2 flex-col items-center justify-center px-10">
            <div class="mb-10 flex h-auto w-1/2 justify-center" data-aos="fade-down"
                data-aos-anchor-placement="center-bottom" data-aos-mirror="true" data-aos-duration="1500"
                data-aos-delay="500">
                <img class="absolute z-20 mb-96 h-auto w-80" src="{{ URL::asset('/img/Shield.svg') }}" alt="">
                <img class="absolute z-10 mt-40 h-auto w-80" src="{{ URL::asset('/img/Top.svg') }}" alt="">
            </div>
            <img class="absolute z-10 mt-40 h-auto w-80" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                data-aos-mirror="true" data-aos-duration="1500" data-aos-delay="500"
                src="{{ URL::asset('/img/Buttom.svg') }}" alt="">
            <img class="z-[5] mt-40 h-auto w-full" data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                data-aos-mirror="true" data-aos-duration="1500" src="{{ URL::asset('/img/Buttom Planet.svg') }}"
                alt="">
        </div>
    </div>
</section>
