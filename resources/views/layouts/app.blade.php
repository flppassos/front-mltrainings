<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN Tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Front MLtrainings</title>
    @livewireStyles
</head>
<body>
    <h1>Layout base</h1>

    {{ $slot }}

    @livewireScripts
</body>
</html>
