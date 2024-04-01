<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="ms-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
    <span class="sr-only">Open sidebar</span>
    <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="default-sidebar"
    class="fixed left-0 top-0 z-40 h-screen w-72 -translate-x-full transition-transform sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full overflow-y-auto bg-gray-50 py-10 lg:bg-transparent">
        <li class="mb-10">
            <a class="flex items-center justify-center" href="/"> <img class="h-auto w-28"
                    src="{{ URL::asset('/img/logo-white.svg') }}" alt="">
            </a>
        </li>
        <ul class="relative ml-14 mt-20 border-s border-gray-200 text-lg font-semibold text-white">
            @php
                $dashboardActive = Request::is('dashboard');
                $criteriaActive = Request::is('dashboard/criteria');
                $criteriaWeightActive = Request::is('dashboard/criteriaWeight');
                $alternativeActive = Request::is('dashboard/alternative');
                $alternativeWeightActive = Request::is('dashboard/alternativeWeight');
                $calculationsActive = Request::is('dashboard/calculations');
            @endphp

            <li class="mb-10 ms-6">
                <a href="/dashboard/criteria">
                    <span
                        class="{{ $dashboardActive || $criteriaActive ? 'bg-gray-700' : 'bg-green-900' }} absolute -start-4 flex h-8 w-8 items-center justify-center rounded-full ring-4 ring-white">
                        @if (!$dashboardActive && !$criteriaActive)
                            <svg class="h-3.5 w-3.5 text-green-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        @endif
                    </span>
                    <h3 class="font-medium leading-tight">Criteria</h3>
                </a>
                <p class="text-sm">Step details here</p>
            </li>

            <li class="mb-10 ms-6">
                <a href="/dashboard/criteriaWeight">
                    <span
                        class="{{ $dashboardActive || $criteriaActive || $criteriaWeightActive ? 'bg-gray-700' : 'bg-green-900' }} absolute -start-4 flex h-8 w-8 items-center justify-center rounded-full ring-4 ring-white">
                        @if (!$dashboardActive && !$criteriaActive && !$criteriaWeightActive)
                            <svg class="h-3.5 w-3.5 text-green-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        @endif
                    </span>
                    <h3 class="font-medium leading-tight">Criteria Weight</h3>
                </a>
                <p class="text-sm">Step details here</p>
            </li>

            <li class="mb-10 ms-6">
                <a href="/dashboard/alternative">
                    <span
                        class="{{ $dashboardActive || $criteriaActive || $criteriaWeightActive || $alternativeActive ? 'bg-gray-700' : 'bg-green-900' }} absolute -start-4 flex h-8 w-8 items-center justify-center rounded-full ring-4 ring-white">
                        @if (!$dashboardActive && !$criteriaActive && !$criteriaWeightActive && !$alternativeActive)
                            <svg class="h-3.5 w-3.5 text-green-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        @endif
                    </span>
                    <h3 class="font-medium leading-tight">Alternative</h3>
                </a>
                <p class="text-sm">Step details here</p>
            </li>

            <li class="mb-10 ms-6">
                <a href="/dashboard/alternativeWeight">
                    <span
                        class="{{ $dashboardActive || $criteriaActive || $criteriaWeightActive || $alternativeActive || $alternativeWeightActive ? 'bg-gray-700' : 'bg-green-900' }} absolute -start-4 flex h-8 w-8 items-center justify-center rounded-full ring-4 ring-white">
                        @if (!$dashboardActive && !$criteriaActive && !$criteriaWeightActive && !$alternativeActive && !$alternativeWeightActive)
                            <svg class="h-3.5 w-3.5 text-green-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        @endif
                    </span>
                    <h3 class="font-medium leading-tight">Alternative Weight</h3>
                </a>
                <p class="text-sm">Step details here</p>
            </li>

            <li class="mb-10 ms-6">
                <a href="/dashboard/calculate">
                    <span
                        class="{{ $dashboardActive || $criteriaActive || $criteriaWeightActive || $alternativeActive || $alternativeWeightActive || $calculationsActive ? 'bg-gray-700' : 'bg-green-900' }} absolute -start-4 flex h-8 w-8 items-center justify-center rounded-full ring-4 ring-white">
                        @if (
                            !$dashboardActive &&
                                !$criteriaActive &&
                                !$criteriaWeightActive &&
                                !$alternativeActive &&
                                !$alternativeWeightActive &&
                                !$calculationsActive)
                            <svg class="h-3.5 w-3.5 text-green-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                        @endif
                    </span>
                    <h3 class="font-medium leading-tight">Calculation</h3>
                </a>
                <p class="text-sm">Step details here</p>
            </li>

            {{-- <li>
                <a href="/dashboard/criteria"
                    class="{{ (Request::is('dashboard') ? 'bg-white text-dark' : Request::is('dashboard/criteria')) ? 'bg-white text-dark' : 'text-white' }} group flex items-center px-8 py-3 hover:bg-white lg:hover:text-dark">
                    <span class="ms-3">Criteria</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/criteriaWeight"
                    class="{{ Request::is('dashboard/criteriaWeight') ? 'bg-white text-dark' : 'text-white' }} group flex items-center px-8 py-3 hover:bg-white lg:hover:text-dark">
                    <span class="ms-3">Criteria Weight</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/alternative"
                    class="{{ Request::is('dashboard/alternative') ? 'bg-white text-dark' : 'text-white' }} group flex items-center px-8 py-3 hover:bg-white lg:hover:text-dark">
                    <span class="ms-3">Alternative</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/alternativeWeight"
                    class="{{ Request::is('dashboard/alternativeWeight') ? 'bg-white text-dark' : 'text-white' }} group flex items-center px-8 py-3 hover:bg-white lg:hover:text-dark">
                    <span class="ms-3">Alternative Weight</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/calculate"
                    class="{{ Request::is('dashboard/calculate') ? 'bg-white text-dark' : 'text-white' }} group flex items-center px-8 py-3 hover:bg-white lg:hover:text-dark">
                    <span class="ms-3">Calculation</span>
                </a>
            </li> --}}
        </ul>
        <ul class="text-lg font-semibold text-white">
            <li>
                <a href="/"
                    class="group flex items-center justify-center py-3 text-white hover:bg-white lg:hover:text-dark">
                    <span class="">Back to Home</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
