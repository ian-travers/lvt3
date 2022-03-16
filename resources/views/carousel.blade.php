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
                    <carousel :autoplay="true">
                        <img src="https://placeimg.com/640/480/any" alt="random image">
                        <img src="https://placeimg.com/640/480/any?2" alt="random image">
                        <img src="https://placeimg.com/640/480/any?3" alt="random image">
                        <img src="https://placeimg.com/640/480/any?4"alt="random image">
                        <img src="https://placeimg.com/640/480/any?5" alt="random image">
                    </carousel>
                </div>

                <div class="flex justify-between items-center">
                    <div class="mx-4">
                        <h1 class="text-2xl font-bold">Smooth Scroll (Practical Vue Components Ep. 1)</h1>
                        <scroll-link href="#smooth" class="text-blue-500">Scroll to the bottom section</scroll-link>
                    </div>
                    <div class="mx-4">
                        <h1 class="text-2xl font-bold">Modal (Practical Vue Components Ep. 4)</h1>
                        <p>
                            <button @click="$modal.show('cancel-modal')" class="text-blue-500">Open Modal</button>
                        </p>

                        <modal name="cancel-modal">
                            <h1 class="text-2xl text-semibold">Leaving So Soon?</h1>
                            <p class="my-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur enim fugiat in nam sequi! Ab accusantium aperiam aut blanditiis dolorem eos in nam nemo optio quas quia quibusdam quis, reiciendis rem sapiente similique, soluta temporibus totam. Accusantium architecto nemo quaerat reiciendis repellendus?
                            </p>

                            <template v-slot:footer>
                                <button @click="$modal.hide()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md mr-2">Cancel</button>
                                <a href="#confirm-cancel-modal" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Confirm Cancellation</a>
                            </template>
                        </modal>

                        <modal name="confirm-cancel-modal">
                            <h1 class="text-2xl text-semibold">Are You 100% Sure?</h1>
                            <p class="my-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut consectetur enim fugiat in nam sequi! Ab accusantium aperiam aut blanditiis dolorem eos in nam nemo, soluta temporibus totam. Accusantium architecto nemo quaerat reiciendis repellendus?
                            </p>

                            <template v-slot:footer>
                                <button @click="$modal.hide()" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md mr-2">Cancel</button>
                                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Yes</a>
                            </template>
                        </modal>
                    </div>
                </div>

                <div class="mt-12 px-4">
                    <tabs>
                        <tab title="First" tab-key="my-tab-1">
                            <div>This is content 1</div>
                        </tab>
                        <tab title="Second" tab-key="my-tab-2">
                            <div>This is content 2</div>
                        </tab>
                        <tab title="Third" tab-key="my-tab-3" active>
                            <div>This is content 3</div>
                        </tab>
                        <tab title="The Last" tab-key="whatever">
                            <div>This is way too over</div>
                        </tab>
                    </tabs>
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

                <div id="smooth" class="mt-12 mb-4">
                    <h2 class="text-xl font-bold px-8 py-4">To smooth scroll section</h2>
                    <div class="flex px-4">
                        <div class="w-1/3 h-48 bg-gray-100 px-4 py-2">
                            <scroll-link href="#app" class="text-blue-500">Go to the top</scroll-link>
                        </div>
                        <div class="w-1/3 h-48 bg-gray-200 px-4 py-2">Item</div>
                        <div class="w-1/3 h-48 bg-gray-100 px-4 py-2">Item</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
