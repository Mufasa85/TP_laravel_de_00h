<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <aside class="sidebar">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}" class="sidebar-logo">Le Blog</a>
            <div class="sidebar-sub">Administration</div>
        </div>
        <nav class="sidebar-nav">
            <div class="nav-section-label">Vue d'ensemble</div>
            <a href="{{ url('/dashboard') }}" class="nav-item">
                <span class="nav-icon">◈</span> Dashboard
            </a>

            <div class="nav-section-label">Contenu</div>
            <a href="{{ url('/dashboard/articles') }}" class="nav-item">
                <span class="nav-icon">✦</span> Articles
            </a>
            <a href="{{ url('/dashboard/categories') }}" class="nav-item">
                <span class="nav-icon">◍</span> Catégories
            </a>
            <a href="{{ url('/dashboard/comments') }}" class="nav-item">
                <span class="nav-icon">◗</span> Commentaires
            </a>

            <div class="nav-section-label">Utilisateurs</div>
            <a href="{{ url('/dashboard/users') }}" class="nav-item">
                <span class="nav-icon">◌</span> Utilisateurs
            </a>

            <div class="nav-section-label">Paramètres</div>
            <a href="{{ url('/dashboard/settings') }}" class="nav-item">
                <span class="nav-icon">◉</span> Réglages
            </a>
        </nav>
        <div class="sidebar-footer">
            <div class="sidebar-user">
                <div class="user-avatar">A</div>
                <div>
                    <div class="user-name">Admin</div>
                    <div class="user-role">Super administrateur</div>
                </div>
            </div>
        </div>
    </aside>

    <div class="main">
        <div class="topbar">
            <div class="topbar-title">@yield('page_title','Dashboard')</div>
            <div class="topbar-actions">
                <a href="{{ url('/') }}" class="view-site">↗ Voir le blog</a>
            </div>
        </div>

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>

