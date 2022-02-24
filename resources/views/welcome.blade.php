<x-app-layout>
    <x-slot name="header">
        @if (Route::has('login'))
            <div class="flex justify-end py-4 px-6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <modal1></modal1>
                    <div class="mt-16 mx-12">
                        <just-get-json title="Get response with axios"></just-get-json>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
