@extends('../welcome')

@section('konten')
<div class="p-6 bg-white shadow ">
    <h1 class="text-center text-lg font-bold mb-4 ">Haloo KIKI huhuyy, Semangat Kerjanya yaa</h1>
    <hr class="border-t border-gray-300">
    <br>
    <br>

    <div class="grid grid-cols-3 gap-4">
        <a href="{{ route('akun.create') }}" class="bg-gray-100 text-black p-8 rounded shadow hover:bg-red-700 hover:text-white border border-gray-300 block ">            
            <h2 class="font-bold mb-2">Tombol Presensi Masuk Roadshow</h2>
            <p>Klik tombol ini untuk melanjutkan presensi</p>
        </a>
    </div>        
    <br>
    <br>
    <div class="grid grid-cols-3 gap-4">
        <a href="{{ route('izin.create') }}" class="bg-gray-100 text-black p-8 rounded shadow hover:bg-red-700 hover:text-white border border-gray-300 block">
            <h2 class="font-bold mb-2">Tombol Presensi Izin Roadshow</h2>
            <p>Klik tombol ini untuk melanjutkan perizinan</p>
        </a>
    </div>        
        <div class="container mx-auto p-4 ">
            <h2 class="text-center font-bold mb-7">Catatan Kegiatan Roadshow</h2>
            <table class="w-full border border-gray-300 text-left bg-white ">
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
                    @forelse ($data as $note)
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
    </div>
</div>
@endsection
