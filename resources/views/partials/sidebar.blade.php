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
        <ul class="text-lg font-semibold">
            <li class="mb-10">
                <a class="flex items-center justify-center" href="/"> <img class="h-auto w-28"
                        src="{{ URL::asset('/img/logo-white.svg') }}" alt="">
                </a>
            </li>
            <li>
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
            </li>
            <li>
                <a href="/"
                    class="text-whitegroup flex items-center px-8 py-3 text-white hover:bg-white lg:hover:text-dark">
                    <span class="ms-3">Back to Home</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
