@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Alternative</h1>

    @include('partials.alerts')

    <div class="relative overflow-x-auto rounded-xl shadow-md">
        <table class="w-full border-b text-lg">
            <thead class="bg-dark text-xl text-white">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left">
                        Code
                    </th>
                    <th scope="col" class="px-6 py-3 text-left">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white hover:bg-gray-100">

                    @foreach ($alternative as $alternative)
                        <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                            {{ $alternative->code }}
                        </th>
                        <td class="px-6 py-4 text-left">
                            {{ $alternative->name }}
                        </td>
                        <td class="px-6 py-4 text-center">
                            <!-- Update Modal -->
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                class="mr-1 font-medium hover:text-blue-500 hover:underline" type="button">
                                Update
                            </button>
                            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <div class="relative rounded-lg bg-white shadow">
                                        <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                                            <h3 class="text-lg font-semibold text-dark">
                                                Update Alternative
                                            </h3>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-dark hover:bg-gray-100"
                                                data-modal-toggle="crud-modal">
                                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <form class="p-4 text-start md:p-5" method="post"
                                            action="/dashboard/alternative/update/{{ $alternative->id }}">
                                            @method('put')
                                            @csrf
                                            <div class="mb-4 grid grid-cols-2 gap-4">
                                                <div class="col-span-2">
                                                    <label for="name"
                                                        class="mb-2 block text-base font-medium text-dark">Name</label>
                                                    <input type="text" name="name" id="name"
                                                        class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                                        placeholder="Type Alternative name" required="">
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-base font-medium text-white hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-400">
                                                Update
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- End of Update Modal --}}

                            {{-- Delete Modal --}}
                            <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                class="ml-1 rounded-lg font-medium hover:text-red-500 hover:underline" type="button">
                                Delete
                            </button>

                            <div id="popup-modal" tabindex="-1"
                                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                                <div class="relative h-auto w-auto p-4">
                                    <div class="relative rounded-lg bg-white shadow">
                                        <div class="p-4 text-center md:p-8">
                                            <svg class="mx-auto mb-4 h-12 w-12 text-dark" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-xl font-normal text-dark">Are you
                                                sure you want to delete this alternative?</h3>
                                            <form class="inline-flex" method="POST"
                                                action="{{ route('alternatives.destroy', $alternative->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button data-modal-hide="popup-modal" type="submit"
                                                    class="inline-flex items-center rounded-lg bg-red-600 px-8 py-2.5 text-center text-base font-medium text-white hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-300">
                                                    Yes
                                                </button>
                                            </form>
                                            <button data-modal-hide="popup-modal" type="button"
                                                class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-base font-medium text-dark hover:bg-gray-100 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">
                                                Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Create Alternative --}}
    <div class="mt-10 flex items-center justify-end">
        <button data-modal-target="crud-modal2" data-modal-toggle="crud-modal2"
            class="gradcolor rounded-lg bg-dark px-6 py-2 text-lg font-semibold text-white hover:text-white" type="button">
            Create
        </button>
        <div id="crud-modal2" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
            <div class="relative max-h-full w-full max-w-md p-4">
                <div class="relative rounded-lg bg-white shadow">
                    <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                        <h3 class="text-lg font-semibold text-dark">
                            Create New Alternative
                        </h3>
                        <button type="button"
                            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-dark hover:bg-gray-100"
                            data-modal-toggle="crud-modal2">
                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form class="p-4 text-start md:p-5" method="POST" action="/dashboard/alternative/added">
                        @csrf
                        <div class="mb-4 grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <label for="code" class="mb-2 block text-base font-medium text-dark">Code</label>
                                <input type="text" name="code" id="code"
                                    class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                    placeholder="Type alternative code" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="mb-2 block text-base font-medium text-dark">Name</label>
                                <input type="text" name="name" id="name"
                                    class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                    placeholder="Type alternative name" required="">
                            </div>
                        </div>
                        {{-- <label for="integrityValue" class="mb-2 block text-base font-medium text-dark">
                            Integrity Value</label>
                        <div class="relative mb-5 flex items-center">
                            <button type="button" id="decrement-button" data-input-counter-decrement="integrityValue"
                                class="h-11 rounded-s-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="number" id="integrityValue" data-input-counter data-input-counter-min="0.1"
                                data-input-counter-max="10.0"
                                class="block h-11 w-full border-x-0 border-dark bg-gray-50 text-center text-sm font-medium text-dark focus:border-dark focus:ring-2 focus:ring-dark"
                                placeholder="" value="0.1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="integrityValue"
                                class="h-11 rounded-e-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                        <label for="availabilityValue" class="mb-2 block text-base font-medium text-dark">
                            Availability Value</label>
                        <div class="relative mb-5 flex items-center">
                            <button type="button" id="decrement-button" data-input-counter-decrement="availabilityValue"
                                class="h-11 rounded-s-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="number" id="availabilityValue" data-input-counter data-input-counter-min="0.1"
                                data-input-counter-max="10.0"
                                class="block h-11 w-full border-x-0 border-dark bg-gray-50 text-center text-sm font-medium text-dark focus:border-dark focus:ring-2 focus:ring-dark"
                                placeholder="" value="0.1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="availabilityValue"
                                class="h-11 rounded-e-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                        <label for="scalabilityValue" class="mb-2 block text-base font-medium text-dark">
                            Scalability Value</label>
                        <div class="relative mb-5 flex items-center">
                            <button type="button" id="decrement-button" data-input-counter-decrement="scalabilityValue"
                                class="h-11 rounded-s-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="number" id="scalabilityValue" data-input-counter data-input-counter-min="0.1"
                                data-input-counter-max="10.0"
                                class="block h-11 w-full border-x-0 border-dark bg-gray-50 text-center text-sm font-medium text-dark focus:border-dark focus:ring-2 focus:ring-dark"
                                placeholder="" value="0.1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="scalabilityValue"
                                class="h-11 rounded-e-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div> --}}
                        <button type="submit"
                            class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-base font-medium text-white hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-400">
                            <svg class="-ms-1 me-1 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add new alternative
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Create Alternative --}}
@endsection
