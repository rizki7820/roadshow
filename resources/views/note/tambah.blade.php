@extends('../welcome')
@section('konten')
    <div class="container mx-auto p-4">
        <h1 class="text-xl font-bold mb-4">Tambah Catatan</h1>
        <form action="{{ route('note.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700 font-bold">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="w-full border border-gray-300 rounded px-3 py-2" required>
            </div>
            <div class="mb-4">
                <label for="note" class="block text-gray-700 font-bold">Catatan</label>
                <textarea name="note" id="note" rows="4" class="w-full border border-gray-300 rounded px-3 py-2"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
        </form>
    </div>
@endsection
