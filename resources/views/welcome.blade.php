<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
    <style>
        .background-login {
            background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.7)),
                url('{{ asset('assets/images/bjb.jpg') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>

   <div class="bg-gray-100 h-screen font-sans">

    @yield('konten')
    @stack('scripts')

    </div>


</body>

</html>
