<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen">
    <div class="flex h-full">
  
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden"></div>

 
        <aside id="sidebar" class="w-64 bg-red-600 text-white flex flex-col transition-all duration-300">
            <div class="py-4 text-center font-bold text-xl border-b border-red-700">
                <span class="font-semibold">Selamat Datang</span>
                <p class="text-white text-sm">{{ ucfirst(strtolower(Auth::user()->name)) }}</p>
            </div>
            <nav class="flex-grow">
                <ul>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <span class="material-icons">home</span>
                        <span class="ml-4">Dashboard</span>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer">
                        <a href="{{ route('akun.create') }}" class="flex items-center w-full">
                            <span class="material-icons">check_circle</span>
                            <span class="ml-4">Absensi</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer">
                        <a href="{{ route('note.create') }}" class="flex items-center w-full">
                            <span class="material-icons">description</span>
                            <span class="ml-4">Catatan Harian</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer">
                        <a href="{{ route('akun.create') }}" class="flex items-center w-full">
                            <span class="material-icons">account_circle</span>
                            <span class="ml-4">Profil Saya</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <button type="submit" class="flex items-center w-full text-left">
                                <span class="material-icons">logout</span>
                                <span class="ml-4">Keluar</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>

 
        <div id="mainContent" class="flex-grow transition-all md:ml-64">
         
            <header class="bg-gray-200 py-4 px-6 border-b border-gray-300 flex justify-between items-center">
             
                <button id="toggleBtn" class="text-red-600 md:hidden">
                    <span class="material-icons">menu</span>
                </button>
                <div>
                    <img src="{{ asset('assets/images/telokom.png') }}" alt="Logo" class="h-14">
                </div>
            </header>

 @if(session('success'))
 <div id="success-notification" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-green-300 text-gray-800 p-6 rounded-xl mb-4 mt-6 opacity-100 transition-all duration-1000 ease-out z-50 shadow-lg animate-bounce">
 <span class="material-icons mr-3">check_circle</span>
 <span>{{ session('success') }}</span>
 </div>
 @endif    
          
            <main class="p-6">
                <div class="bg-white shadow rounded-lg p-4">
                    <h2 class="text-lg font-semibold mb-2">Selamat Datang di Dashboard</h2>
                    <p class="text-gray-600 text-sm">Ini adalah halaman utama untuk mengakses fitur-fitur sistem.</p>
                </div>
            </main>

        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const notification = document.getElementById('success-notification');
            if (notification) {
                setTimeout(() => {
                    notification.classList.add('opacity-0'); 
                    notification.classList.add('translate-y-[-30px]'); 
                }, 4000);

                setTimeout(() => {
                    notification.style.display = 'none'; 
                }, 4000); 
            }
        });

        const sidebar = document.getElementById('sidebar');
        const toggleBtn = document.getElementById('toggleBtn');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });

        window.addEventListener('resize', () => {
            if (window.innerWidth >= 768) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.add('hidden');
            }
        });
    </script>
</body>
</html>