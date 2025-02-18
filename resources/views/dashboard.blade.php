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
        <!-- Overlay untuk sidebar -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden"></div>

        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-64 bg-red-600 text-white flex flex-col fixed md:relative h-full transform -translate-x-full md:translate-x-0 transition-transform z-50">
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
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <a href="{{ route('menu.create') }}" class="flex items-center w-full">
                            <span class="material-icons">check_circle</span>
                            <span class="ml-4">Absensi</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <a href="{{ route('note.create') }}" class="flex items-center w-full">
                            <span class="material-icons">description</span>
                            <span class="ml-4">Catatan Harian</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <a href="{{ route('akun.create') }}" class="flex items-center w-full">
                            <span class="material-icons">account_circle</span>
                            <span class="ml-4">Profil Saya</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <button id="logoutButton" class="flex items-center w-full text-left">
                            <span class="material-icons">logout</span>
                            <span class="ml-4">Keluar</span>
                        </button>
                    </li>
                </ul>
            </nav>
        </aside>

      
        <div id="mainContent" class="flex-grow transition-all md:ml-64">

            <!-- Header -->
            <header class="bg-gray-200 py-4 px-6 border-b border-gray-300 flex justify-between items-center">
                <button id="toggleSidebar" class="md:hidden p-2 text-red-600 focus:outline-none">
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

<div id="confirmLogoutModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-96 text-center">
        <h3 class="text-3xl font-semibold text-gray-800 mb-4">Apakah Anda Yakin?</h3>
        <p class="text-gray-600 mb-6">Jangan lupa untuk kembali mengunjungi kami lagi 😢</p>
        
        <div class="flex justify-center space-x-6">
            <button id="confirmYes" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-8 py-3 rounded-full text-lg hover:from-red-600 hover:to-red-300 transition-all focus:outline-none">Keluar</button>
            <button id="confirmNo" class="bg-transparent border-2 border-gray-300 text-gray-700 px-8 py-3 rounded-full text-lg hover:bg-gray-100 transition-all focus:outline-none">Batal</button>
        </div>
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
        const overlay = document.getElementById('overlay');
        const toggleButton = document.getElementById('toggleSidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        });

        document.addEventListener('DOMContentLoaded', function() {
    const logoutButton = document.getElementById('logoutButton');
    const confirmLogoutModal = document.getElementById('confirmLogoutModal');
    const confirmYesButton = document.getElementById('confirmYes');
    const confirmNoButton = document.getElementById('confirmNo');

    logoutButton.addEventListener('click', function() {
        confirmLogoutModal.classList.remove('hidden');
        setTimeout(() => {
            confirmLogoutModal.classList.add('opacity-100');
        }, 50);
    });

    confirmYesButton.addEventListener('click', function() {
        window.location.href = "{{ route('logout') }}"; 
    });

    confirmNoButton.addEventListener('click', function() {
        confirmLogoutModal.classList.remove('opacity-100');
        setTimeout(() => {
            confirmLogoutModal.classList.add('hidden');
        }, 300); 
    });
});

 </script>

</body>
</html>