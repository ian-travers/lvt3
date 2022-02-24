<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($projects->count())
                        <div class="px-8 py-4 mb-8">
                            @foreach($projects as $project)
                                <div class="border rounded-lg px-4 py-2">
                                    <p>
                                        <span class="text-indigo-600">{{ $project->name }}</span>
                                        |
                                        {{ $project->description }}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        There is no projects
                    @endif
                    <project-form></project-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
