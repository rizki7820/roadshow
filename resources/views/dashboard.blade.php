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

        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-red-600 text-white flex flex-col transition-all duration-300">
            <div class="py-4 text-center font-bold text-xl border-b border-red-700">
                <span>Selamat Datang</span>
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
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer">
                        <a href="/login" class="flex items-center w-full">
                            <span class="material-icons">logout</span>
                            <span class="ml-4">Keluar</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-grow">

            <!-- Header -->
            <header class="bg-gray-200 py-4 px-6 border-b border-gray-300 flex justify-between items-center">
                <!-- Toggle Button -->
                <button id="toggleBtn" class="text-red-600 md:hidden">
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
        const toggleBtn = document.getElementById('toggleBtn');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-ml-64'); 
    </script>

</body>

</html>