<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-3 p-3">
    <header class="m-3">
        <x-navigation/>
    </header>
    <br>
    <main>
        <section class="flex m-3 pt-3 shadow-md">
            <div class="flex-2 p-6">
                <h3 class="text-8xl">Welcome to <br> <strong>Ube <br> Recipes</strong></h3>
            </div>
            <div class="content-center p-6">
                <button class="btn btn-xl btn-outline">Add fun to your purple yam!</button>
            </div>
        </section>
    </main>
</body>
</html> 