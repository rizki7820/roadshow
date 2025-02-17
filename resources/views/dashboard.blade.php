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
        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden"></div>

        <!-- Sidebar -->
        <aside id="sidebar"
            class="w-64 bg-red-600 text-white flex flex-col fixed md:relative h-full transform -translate-x-full md:translate-x-0 transition-transform z-50">
            <div class="py-4 text-center font-bold text-xl border-b border-red-700">
                <span>Selamat Datang</span>
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

        <!-- Main Content -->
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

            <!-- Content -->
            <main class="p-6">
                <div class="bg-white shadow rounded-lg p-4">
                    <h2 class="text-lg font-semibold mb-4">Selamat Datang di Dashboard</h2>
                    <p class="text-gray-600">Ini adalah halaman utama untuk mengakses fitur-fitur sistem.</p>
                </div>
            </main>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const toggleButton = document.getElementById('toggleSidebar');

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
