@extends('../welcome')
@section('konten')

<div class="background-login bg-gray-100 flex items-center justify-center min-h-screen px-4">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-md">
       
        <div class="flex justify-center mb-4">
            <img src="{{ asset('assets/images/telokom.png') }}" alt="Logo" class="h-24">
        </div>

       
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-1">Selamat Datang</h1>
        <p class="text-sm text-gray-600 text-center mb-6">Please enter your details</p>

        <form method="POST" action="{{ route('login') }}">
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

            <div class="mb-4 relative">
                <input type="password" id="password" name="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                    placeholder="Password" required>
                <button type="button" id="toggle-password" class="absolute right-3 top-2.5 text-gray-500">
                
                </button>
            </div>

            
            <div class="flex items-center mb-6">
                <input type="checkbox" id="remember" name="remember" aria-describedby="remember" 
                    class="w-4 h-4 text-red-600 focus:ring-red-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 text-gray-600 text-sm">Remember me</label>
            </div>

            
            <button type="submit"
                class="w-full bg-red-700 text-white font-semibold py-2 rounded-full hover:bg-red-800 transition duration-300">
                Login
            </button>
        </form>
        <div class="text-center mt-4">
            <p class="text-gray-600 text-sm">Belum punya akun? 
                <a href="{{ route('register') }}" class="text-blue-500  hover:underline">
                    Register
                </a>
            </p>
        </div>
    </div>
</div>
@endsection