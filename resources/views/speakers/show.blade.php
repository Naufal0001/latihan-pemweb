<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Speaker Details') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-2">{{ $speaker->nama_speaker }}</h3>
                    <p class="mb-2"><strong>Asal Instansi:</strong> {{ $speaker->asal_instansi }}</p>
                    <p class="mb-2"><strong>Topic:</strong> {{ $speaker->topic }}</p>
                    <p class="mb-2"><strong>Summary:</strong> {{ $speaker->summary }}</p>
                    @if ($speaker->foto)
                        <div class="mt-4"><img src="{{ asset('storage/' . $speaker->foto) }}" width="240"
                                alt="{{ $speaker->nama_speaker }}"></div>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('speakers.index') }}" class="px-4 py-2 bg-gray-300 rounded">Back</a>
                        <a href="{{ route('speakers.edit', $speaker) }}"
                            class="px-4 py-2 bg-yellow-400 rounded">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
