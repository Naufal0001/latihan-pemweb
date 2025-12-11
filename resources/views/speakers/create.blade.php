<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Create Speaker') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('speakers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label class="block font-medium">Nama Speaker</label>
                            <input type="text" name="nama_speaker" value="{{ old('nama_speaker') }}"
                                class="w-full border rounded px-2 py-1">
                            @error('nama_speaker')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Asal Instansi</label>
                            <input type="text" name="asal_instansi" value="{{ old('asal_instansi') }}"
                                class="w-full border rounded px-2 py-1">
                            @error('asal_instansi')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Topic</label>
                            <input type="text" name="topic" value="{{ old('topic') }}"
                                class="w-full border rounded px-2 py-1">
                            @error('topic')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Summary</label>
                            <textarea name="summary" class="w-full border rounded px-2 py-1">{{ old('summary') }}</textarea>
                            @error('summary')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium">Foto</label>
                            <input type="file" name="foto">
                            @error('foto')
                                <div class="text-red-600">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="flex gap-2">
                            <button class="px-4 py-2 bg-green-600 text-white rounded">Save</button>
                            <a href="{{ route('speakers.index') }}" class="px-4 py-2 bg-gray-300 rounded">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
