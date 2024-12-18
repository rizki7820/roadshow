@extends('../welcome')
@section('konten')
<div class="container mx-auto p-6">
    <form method="POST" action="{{ route('izin.store') }}" enctype="multipart/form-data" class="p-6 bg-white rounded-lg shadow-lg max-w-lg mx-auto">
        @csrf
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold">Form Izin</h2>
        </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap:</label>
            <input type="text" name="nama" id="nama" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="Masukkan nama lengkap" required>
            @error('nama')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror

        </div>

        <div class="mb-4">
            <label for="nip" class="block text-sm font-medium text-gray-700">NIP/NIS:</label>
            <input type="text" name="nip" id="nip" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" placeholder="Masukkan kelas" required>
            @error('nip')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror

        </div>

        <div class="mb-4">
            <label for="alasan" class="block text-sm font-medium text-gray-700">Alasan Izin:</label>
            <textarea name="alasan" id="alasan" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" rows="3" placeholder="Masukkan alasan izin" required></textarea>
            @error('alasan')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror

        </div>

        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Izin:</label>
            <input type="date" name="tanggal" id="tanggal" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm" required>
    
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="w-full bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                Ajukan Izin
            </button>
        </div>
</form>
</div>
@endsection
