<aside class="w-64 bg-red-600 text-white flex flex-col">
            <div class="py-4 text-center font-bold text-xl border-b border-red-700">
                <span>selamat datang</span>
            </div>
            <nav class="flex-grow">
                <ul> 
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <span class="material-icons">home</span>
                        <span class="ml-4">Dashboard</span>
                    </li>
                    <a href="{{ route('menu.create') }}">
                        <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                            <span class="material-icons">check_circle</span>
                            <span class="ml-4">Absensi</span>
                        </li>
                    </a>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <span class="material-icons">description</span>
                        <span class="ml-4">Catatan Harian</span>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <a href="">
                            <span class="material-icons">account_circle</span>
                            <span class="ml-4">Profil Saya</span>
                        </a>
                    </li>
                    <li class="px-6 py-3 hover:bg-red-700 cursor-pointer flex items-center">
                        <span class="material-icons">logout</span>
                        <span class="ml-4">Keluar</span>
                    </li>
                </ul>
            </nav>
</aside>