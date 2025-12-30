<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Ubae❣ Recipes' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-3 p-3">
    <header class="m-3">
        <x-navigation/>
    </header>
    <br>
    <main>
        {{ $slot }}
    </main>
</body>
</html> 