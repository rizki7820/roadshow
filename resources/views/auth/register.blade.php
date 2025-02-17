@extends('../welcome')
@section('konten')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center">Register</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded-lg mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST" class="mt-4">
        @csrf

        <!-- Nama -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                required>
        </div>

        <!-- Tanggal Lahir -->
        <div class="mb-4">
            <label for="birth_date" class="block text-gray-700">Tanggal Lahir</label>
            <input type="date" id="birth_date" name="birth_date" value="{{ old('birth_date') }}"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                required>
        </div>

        <!-- Username -->
        <div class="mb-4">
            <label for="username" class="block text-gray-700">Buat Nama Username</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                required>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                required>
        </div>

        <!-- Konfirmasi Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                required>
        </div>

        <!-- Tombol Register -->
        <button type="submit"
            class="w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition duration-300">
            Register
        </button>

        <p class="text-center mt-4">
            Sudah punya akun? <a href="{{ route('login') }}" class="text-blue-500">Login</a>
        </p>
    </form>
</div>
@endsection
