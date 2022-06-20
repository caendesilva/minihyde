<!DOCTYPE html>
<html lang="{{ config('hyde.language', 'en') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! $page->renderPageMetadata() !!}
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/hydefront@v1.11/dist/hyde.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/hydefront@v1.11/dist/app.css">
@if(Hyde::hasFeature('darkmode'))
    <meta id="meta-color-scheme" name="color-scheme" content="{{ config('hyde.default_color_scheme', 'light') }}">
    <script>if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) { document.documentElement.classList.add('dark'); document.getElementById('meta-color-scheme').setAttribute('content', 'dark');} else { document.documentElement.classList.remove('dark') } </script>
@endif
</head>
<body id="app" class="flex flex-col min-h-screen overflow-x-hidden dark:bg-gray-900 dark:text-white">
    <a href="#content" id="skip-to-content">Skip to content</a>
    <section>
@yield('content') 
    </section>
    <script defer src="https://cdn.jsdelivr.net/npm/hydefront@v1.11/dist/app.js"></script>
</body>
</html>
