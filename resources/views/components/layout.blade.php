<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Marketplace' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <x-nav />
    <main class="container py-4">{{ $slot }}</main>
    <x-footer />
</body>

</html>
