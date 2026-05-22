<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- yield title requis par l'énoncé --}}
    <title>@yield('title', 'Dashboard')</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">

    {{-- css dashboard --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    {{-- Sidebar dashboard (composant) --}}
    @include('components.dashboard.sidebar')

    <div class="main">
        {{-- Topbar dashboard (composant) --}}
        @include('components.dashboard.topbar')

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>

