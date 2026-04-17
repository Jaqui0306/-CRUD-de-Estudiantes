<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Estudiantes</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gradient-to-br from-slate-950 via-slate-900 to-slate-950 text-white min-h-screen">

<nav class="bg-slate-900 border-b border-slate-800 px-8 py-4 flex justify-between items-center">

    <h1 class="text-xl font-bold text-sky-400">
        CRUD Estudiantes
    </h1>

    <div class="space-x-6">
        <a href="/" class="hover:text-sky-400">Estudiantes</a>
        <a href="/carreras" class="hover:text-sky-400">Carreras</a>
    </div>

</nav>

<div class="p-8 max-w-6xl mx-auto">

    @if(session('success'))
        <div class="bg-green-500/10 border border-green-500 text-green-400 p-4 mb-6 rounded-xl">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>