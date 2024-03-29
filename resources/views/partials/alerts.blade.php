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
