@extends('dashboard.dashboardLayout.main')

@section('dashboard')
    <h1 class="mb-10 text-4xl font-semibold">Criteria</h1>

    @if (session()->has('success') || session()->has('error') || $errors->any())
        <div id="alert-1"
            class="@if (session()->has('success')) bg-green-50 text-green-800 @else bg-red-50 text-red-800 @endif mb-4 flex items-center rounded-lg border-2 border-dark p-4"
            role="alert">
            <svg class="h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                @if (session()->has('success'))
                    {{ session('success') }}
                @else
                    @if ($errors->has('code') && $errors->has('name'))
                        The code and name have already been taken.
                    @else
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    @endif
                @endif
            </div>
            <button type="button"
                class="@if (session()->has('success')) bg-green-50 text-green-800 @else bg-red-50 text-red-800 @endif -mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg hover:bg-dark"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <div class="overflow-x-auto rounded-xl shadow-md">
        <table class="w-full table-fixed text-lg">
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
                @foreach ($criteria as $criteria)
                    <tr class="bg-white hover:bg-gray-100">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 text-left font-medium text-dark">
                            {{ $criteria->code }}
                        </th>
                        <td class="px-6 py-4 text-left">
                            {{ $criteria->name }}
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
                                                Update Criteria
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
                                            action="/dashboard/criteria/update/{{ $criteria->id }}">
                                            @method('put')
                                            @csrf
                                            <div class="mb-4 grid grid-cols-2 gap-4">
                                                <div class="col-span-2">
                                                    <label for="name"
                                                        class="mb-2 block text-base font-medium text-dark">Name</label>
                                                    <input type="text" name="name" id="name"
                                                        class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                                        placeholder="Type criteria name" required="">
                                                </div>
                                            </div>
                                            {{-- <label for="value" class="mb-2 block text-base font-medium text-dark">Update
                                                Criteria Value</label>
                                            <div class="relative mb-5 flex items-center">
                                                <button type="button" id="decrement-button"
                                                    data-input-counter-decrement="value"
                                                    class="h-11 rounded-s-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                                    <svg class="h-3 w-3 text-dark" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 18 2">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                    </svg>
                                                </button>
                                                <input type="number" id="value" data-input-counter
                                                    data-input-counter-min="0.1" data-input-counter-max="10.0"
                                                    class="block h-11 w-full border-x-0 border-dark bg-gray-50 text-center text-sm font-medium text-dark focus:border-dark focus:ring-2 focus:ring-dark"
                                                    placeholder="" value="0.1" required />
                                                <button type="button" id="increment-button"
                                                    data-input-counter-increment="value"
                                                    class="h-11 rounded-e-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                                    <svg class="h-3 w-3 text-dark" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 18 18">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                                    </svg>
                                                </button>
                                            </div> --}}
                                            <button
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
                                                sure you want to delete this criteria?</h3>
                                            <form class="inline-flex" method="POST"
                                                action="{{ route('criterias.destroy', $criteria->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" data-modal-hide="popup-modal"
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
    <div class="mt-10 flex items-center justify-end">
        <button data-modal-target="crud-modal2" data-modal-toggle="crud-modal2"
            class="gradcolor rounded-lg bg-dark px-6 py-2 text-lg font-semibold text-white hover:text-white"
            type="button">
            Create
        </button>
        <div id="crud-modal2" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
            <div class="relative max-h-full w-full max-w-md p-4">
                <div class="relative rounded-lg bg-white shadow">
                    <div class="flex items-center justify-between rounded-t border-b p-4 md:p-5">
                        <h3 class="text-lg font-semibold text-dark">
                            Create New Criteria
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
                    <form class="p-4 text-start md:p-5" method="POST" action="/dashboard/criteria/added">
                        @csrf
                        <div class="mb-4 grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <label for="code" class="mb-2 block text-base font-medium text-dark">Code</label>
                                <input type="text" name="code" id="code"
                                    class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                    placeholder="Type criteria code" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="mb-2 block text-base font-medium text-dark">Name</label>
                                <input type="text" name="name" id="name"
                                    class="block w-full rounded-lg border border-dark bg-gray-50 p-2.5 text-base text-dark focus:border-dark focus:ring-dark"
                                    placeholder="Type criteria name" required="">
                            </div>
                        </div>
                        {{-- <label for="value" class="mb-2 block text-base font-medium text-dark">
                            Criteria Value</label>
                        <div class="relative mb-5 flex items-center">
                            <button type="button" id="decrement-button" data-input-counter-decrement="value"
                                class="h-11 rounded-s-lg border border-dark bg-gray-100 p-3 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-dark">
                                <svg class="h-3 w-3 text-dark" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="number" id="value" data-input-counter data-input-counter-min="0.1"
                                data-input-counter-max="10.0"
                                class="block h-11 w-full border-x-0 border-dark bg-gray-50 text-center text-sm font-medium text-dark focus:border-dark focus:ring-2 focus:ring-dark"
                                placeholder="" value="0.1" required />
                            <button type="button" id="increment-button" data-input-counter-increment="value"
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
                            Add new criteria
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
