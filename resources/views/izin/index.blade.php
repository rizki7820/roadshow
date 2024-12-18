@extends('../welcome')
@section('konten')
<div class="container mx-auto p-4">
    <h2 class="text-center">Daftar Izin</h2>
    <a href="{{ route('izin.create') }}" class="inline-block mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Tambah Catatan
    </a>

    <table class="w-full border border-gray-300 text-left bg-white">
        <thead>
            <tr class="bg-red-700">
                <th class="border border-gray-300 font-semibold text-white px-4 py-2">#</th>
                <th class="border border-gray-300 font-semibold text-white px-4 py-2">Nama</th>
                <th class="border border-gray-300 font-semibold text-white px-4 py-2">NIP/NIS</th>
                <th class="border border-gray-300 font-semibold text-white px-4 py-2">Alasan</th>
                <th class="border border-gray-300 font-semibold text-white px-4 py-2">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($izins as $izin)
            <tr>
                <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $izin->nama }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $izin->nip }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $izin->alasan }}</td>
                <td class="border border-gray-300 px-4 py-2">{{ $izin->tanggal }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
