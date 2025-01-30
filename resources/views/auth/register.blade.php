@extends('../welcome')
@section('konten')

<div class="background-register bg-gray-100 flex items-center justify-center min-h-screen px-4">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-md">
       
        <div class="flex justify-center mb-4">
            <img src="{{ asset('assets/images/telokom.png') }}" alt="Logo" class="h-24">
        </div>

        <h1 class="text-2xl font-bold text-gray-800 text-center mb-1">Create an Account</h1>
        <p class="text-sm text-gray-600 text-center mb-6">Fill in the details to register</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            @if ($errors->any())
                <ul class="mb-4">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-sm">- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="mb-4">
                <input type="text" id="username" name="username"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Username" required>
            </div>

            <div class="mb-4">
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Email" required>
            </div>

            <div class="mb-4 relative">
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Password" required>
                <button type="button" id="toggle-password" class="absolute right-3 top-2.5 text-gray-500">
                </button>
            </div>

            <div class="mb-4 relative">
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Confirm Password" required>
            </div>

            <button type="submit"
                class="w-full bg-red-700 text-white font-semibold py-2 rounded-full hover:bg-red-800 transition duration-300">
                Register
            </button>

            <p class="text-center text-sm text-gray-600 mt-4">Already have an account? <a href="{{ route('register') }}" class="text-red-600 hover:underline">Login</a></p>
        </form>
    </div>
</div>
@endsection
