<!doctype html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#111827">
    <meta name="description" content="Simplifique agendamentos, organize profissionais e tenha mais controle sobre seu negócio com a Zenvor.">
    <meta property="og:title" content="Zenvor | Gestão inteligente para o seu negócio">
    <meta property="og:description" content="Uma plataforma mais clara para organizar a operação do seu negócio.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <title>Zenvor | Gestão inteligente para o seu negócio</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) document.documentElement.classList.add('dark');
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cloud text-ink antialiased transition-colors duration-300 dark:bg-night dark:text-white">
    {{ $slot ?? '' }}
    @yield('content')
</body>
</html>
