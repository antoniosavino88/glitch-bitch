<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Nova+Square&display=swap"
        rel="stylesheet">

    <title>Glitch&Bitch</title>
</head>

<body class="bg-1">
    <x-navbar />

    <div class="min-vh-100 mt-5">
        {{ $slot }}
    </div>

    <x-footer />
</body>

</html>
