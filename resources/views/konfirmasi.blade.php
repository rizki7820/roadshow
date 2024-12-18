@extends('../welcome')
@section('konten')
    <div class="bg-white p-6 rounded-lg shadow-lg text-center w-80 mx-auto mt-10 border-2 border-grey-500">
        <p class="text-lg font-semibold mb-4">Apakah anda yakin ingin keluar?</p>
        <div class="flex justify-center space-x-4">

            <button onclick="confirmExit()"
                class="px-7 py-2 bg-red-700 text-white rounded-md hover:bg-red-600 focus:ring focus:ring-red-300">
                IYA
            </button>

            <button onclick="cancelAction()"
                class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-900 focus:ring focus:ring-gray-400">
                TIDAK
            </button>
        </div>
    </div>

    <script>
        function confirmExit() {
            alert('Anda memilih keluar.');
        }

        function cancelAction() {
            alert('Anda membatalkan aksi.');
        }
    </script>
@endsection
