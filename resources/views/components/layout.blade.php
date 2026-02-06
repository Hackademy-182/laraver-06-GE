<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Marketplace' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-light">
    <div class="container py-4">{{ $slot }}</div>


</body>

</html>
