@extends('../welcome')
@section('konten')

    <div class="container mx-auto p-6">
        <form method="POST" action="{{ route('akun.store') }}" enctype="multipart/form-data" class="p-6 bg-white rounded-lg shadow-lg max-w-lg mx-auto">
            @csrf
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold">Absensi</h2>
            </div>

            <!-- NIP/NIS -->
            <div class="mb-4">
                <label for="nip" class="block text-sm font-medium text-gray-700">NIP/NIS:</label>
                <input type="text" name="nip" id="nip" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="Masukkan NIP/NIS" required>
                @error('nip')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Nama Lengkap -->
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap:</label>
                <input type="text" name="nama" id="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="Masukkan Nama Lengkap" required>
                @error('nama')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- No Telepon -->
            <div class="mb-4">
                <label for="no_telfon" class="block text-sm font-medium text-gray-700">No Telepon:</label>
                <input type="text" name="no_telfon" id="no_telfon" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="Masukkan No Telepon" required>
                @error('no_telfon')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Lokasi Rootshow -->
            <div class="mb-4">
                <label for="lokasi" class="block text-sm font-medium text-gray-700">Lokasi Rootshow:</label>
                <input type="text" name="lokasi" id="lokasi" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="Masukkan Lokasi Rootshow" required>
                @error('lokasi')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Unggah Foto -->
            <div class="mb-4">
                <label for="unggah" class="block text-sm font-medium text-gray-700">Unggah Foto:</label>
                <input type="file" name="unggah" id="unggah" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
                @error('unggah')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Tombol Submit -->
            <div class="flex items-center justify-between">
                <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Simpan
                </button>
            </div>
        </form>
    </div>


@endsection