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
                    <carousel autoplay="true">
                        <img src="https://placeimg.com/640/480/any">
                        <img src="https://placeimg.com/640/480/any?2">
                        <img src="https://placeimg.com/640/480/any?3">
                        <img src="https://placeimg.com/640/480/any?4">
                        <img src="https://placeimg.com/640/480/any?5">
                    </carousel>
                </div>

                <div style="padding-top: 1000px" class="flex items-center justify-center my-8">
                    <div class="border-2 border-dashed border-gray-300 rounded-lg sm:w-20 text-center mx-4 p-4">
                        <count :to="12" :velocity="40"></count>
                    </div>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg sm:w-20 text-center mx-4 p-4">
                        <count :to="90000" :velocity="40"></count>
                    </div>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg sm:w-20 text-center mx-4 p-4">
                        <count :to="1987" :velocity="40"></count>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
