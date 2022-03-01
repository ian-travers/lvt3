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
                    <img src="https://placeimg.com/640/480/any">
                    <img src="https://placeimg.com/640/480/any?2">
                    <img src="https://placeimg.com/640/480/any?3">
                    <img src="https://placeimg.com/640/480/any?4">
                    <img src="https://placeimg.com/640/480/any?5">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
