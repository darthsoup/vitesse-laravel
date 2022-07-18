<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" href="/pwa-192x192.png">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00aba9">
        <meta name="msapplication-TileColor" content="#00aba9">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script>
            (function () {
                const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
                const setting = localStorage.getItem('vueuse-color-scheme') || 'auto'
                if (setting === 'dark' || (prefersDark && setting !== 'light'))
                    document.documentElement.classList.toggle('dark', true)
            })()
        </script>
        @routes
        @vite('resources/js/app.ts')
        @inertiaHead
    </head>
    <body class="font-sans">
        @inertia
    </body>
</html>
