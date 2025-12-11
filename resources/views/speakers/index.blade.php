<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Speakers') }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <div>Speakers list</div>
                        <a href="{{ route('speakers.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">New
                            Speaker</a>
                    </div>

                    @if (session('success'))
                        <div class="text-green-600 mb-4">{{ session('success') }}</div>
                    @endif

                    <table class="min-w-full divide-y divide-gray-200 mt-4">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Speaker</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Asal Instansi</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Topic</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Foto</th>
                                <th
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($speakers as $speaker)
                                <tr>
                                    <td class="px-6 py-4">{{ $speaker->nama_speaker }}</td>
                                    <td class="px-6 py-4">{{ $speaker->asal_instansi }}</td>
                                    <td class="px-6 py-4">{{ $speaker->topic }}</td>
                                    <td class="px-6 py-4">
                                        @if ($speaker->foto)
                                            <img src="{{ asset('storage/' . $speaker->foto) }}"
                                                alt="{{ $speaker->nama_speaker }}" width="100">
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('speakers.show', $speaker) }}"
                                            class="text-blue-600 mr-2">View</a>
                                        <a href="{{ route('speakers.edit', $speaker) }}"
                                            class="text-yellow-600 mr-2">Edit</a>
                                        <form action="{{ route('speakers.destroy', $speaker) }}" method="POST"
                                            class="inline" onsubmit="return confirm('Delete this speaker?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">{{ $speakers->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
