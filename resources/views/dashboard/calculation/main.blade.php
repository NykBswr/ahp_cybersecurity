@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    @if (count($criteria) < 2)
        <h1 class="mb-10 text-4xl font-semibold">Calculation</h1>
        <div class="relative overflow-x-auto rounded-xl shadow-md">
            <table class="w-full border-b text-lg">
                <thead class="bg-dark text-xl text-white">
                    <tr>
                        <th class="px-6 py-3 text-center">
                            <h1 class="bg-dark text-xl text-white">First things first: create your criteria, and check the
                                criteria wei!</h1>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
    @else
        <div class="mb-10 flex flex-row items-center justify-between">
            <div class="flex items-center">
                <h1 class="mr-5 text-4xl font-semibold">Calculation</h1>
                {{-- Dropdown --}}
                <div class="font-medium">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="inline-flex w-48 items-center justify-between rounded-lg border border-dark bg-transparent px-5 py-2.5 text-center text-sm font-medium focus:outline-none focus:ring-4 focus:ring-blue-300"
                        type="button">
                        <span id="dropdownButtonText">Criteria
                            Calculation</span>
                        <svg class="ms-3 h-2.5 w-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="z-10 hidden w-48 divide-y divide-gray-100 rounded-lg bg-transparent bg-white shadow">
                        <ul class="py-2 text-sm text-dark" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a data-page="criteriaCalculation"
                                    class="block cursor-pointer px-4 py-2 hover:bg-gray-100">Criteria
                                    Calculation</a>
                            </li>
                            <li>
                                <h1 class="block cursor-default border-b border-dark px-4 py-2 text-center">Alternative
                                    Calculation</h1>
                            </li>
                            @foreach ($criteria as $link)
                                <li>
                                    <a data-page="{{ $link->code }}Calculation"
                                        class="block cursor-pointer px-4 py-2 hover:bg-gray-100">{{ $link->name }}</a>
                                </li>
                            @endforeach
                            <li class="border-t border-dark">
                                <a data-page="rangkingCalculation"
                                    class="block cursor-pointer px-4 py-2 hover:bg-gray-100">Rangking</a>
                            </li>

                        </ul>
                    </div>
                </div>
                {{-- End of Dropdown --}}
            </div>
            <a href="/dashboard/alternativeWeight">
                <div class="gradcolor rounded-lg bg-dark px-6 py-2 text-lg font-semibold text-white hover:text-white">
                    Back
                </div>
            </a>
        </div>

        @include('dashboard.calculation.criteriaCalculator')

        @include('dashboard.calculation.alternativeCalculator')

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Event listener untuk setiap item dropdown menu
                var dropdownItems = document.querySelectorAll("#dropdown ul li a");
                dropdownItems.forEach(function(item) {
                    item.addEventListener("click", function(event) {
                        event.preventDefault();
                        var buttonText = this.textContent;
                        document.getElementById("dropdownButtonText").textContent = buttonText;
                    });
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                // Event listener untuk tombol dropdown
                document.getElementById("dropdownDefaultButton").addEventListener("click", function() {
                    var dropdownMenu = document.getElementById("dropdown");
                    dropdownMenu.classList.toggle("hidden");
                });

                // Event listener untuk setiap item dropdown menu
                var dropdownItems = document.querySelectorAll("#dropdown ul li a");
                dropdownItems.forEach(function(item) {
                    item.addEventListener("click", function(event) {
                        event.preventDefault();
                        var page = this.getAttribute("data-page");
                        showContent(page);
                    });
                });

                // Fungsi untuk menampilkan konten berdasarkan ID
                function showContent(contentId) {
                    var contents = document.getElementsByClassName("content");
                    for (var i = 0; i < contents.length; i++) {
                        contents[i].style.display = "none";
                    }

                    var contentToShow = document.getElementById(contentId);
                    if (contentToShow) {
                        contentToShow.style.display = "block";
                    }
                }

                // Menampilkan konten kriteria secara default
                showContent("criteriaCalculation");
            });
        </script>
    @endif
@endsection
