@extends('../welcome')
@section('konten')
    <div class="container mx-auto p-4">
        <a href="{{ route('akun.create') }}" class="inline-block mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Tambah Data
        </a>
        <table class="w-full border border-gray-300 text-left bg-white">
            <thead>
                <tr class="bg-red-700">
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">No</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">NIP/NIS</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Nama Lengkap</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">No Telfon</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Lokasi Rootshow</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Unggah Foto</th>
                    <th class="border border-gray-300 font-semibold text-white px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($akun as $d)
                <tr class="hover:bg-gray-100">
                    <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $d->nip }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $d->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $d->no_telfon }}</td>    
                    <td class="border border-gray-300 px-4 py-2">{{ $d->lokasi }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $d->unggah }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="{{ route('akun.destroy', $d->id) }}" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('akun.edit', $d->id) }}" class="text-blue-500 hover:underline mr-2">Edit</a>
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="border border-gray-300 px-4 py-2 text-center text-gray-500">Data tidak tersedia</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endsection