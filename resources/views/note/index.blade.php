@extends('../welcome')
@section('konten')
    <div class="container mx-auto p-4">
        <a href="{{ route('note.create') }}" class="inline-block mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Tambah Catatan
        </a>
        <table class="w-full border border-gray-300 text-left bg-white">
            <thead>
                <tr class="bg-red-700">
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">No</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Hari</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Tanggal</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Tahun</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Catatan</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($note as $note)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $note->hari }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $note->tanggal }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $note->tahun }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $note->note }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="border border-gray-300 px-4 py-2 text-center text-gray-500">Data tidak tersedia</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection