@php
    $activeRoute = request()->route()?->getName();
@endphp

<nav>
    <a href="{{ url('/') }}" class="nav-logo">Le Blog</a>
    <ul class="nav-links">
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Accueil</a></li>
        <li><a href="{{ route('articles.index') }}" class="{{ request()->is('articles*') ? 'active' : '' }}">Articles</a></li>
        <li><a href="{{ url('/categories') }}" class="{{ request()->is('categories*') ? 'active' : '' }}">Catégories</a></li>
        <li><a href="{{ url('/about') }}" class="{{ request()->is('about*') ? 'active' : '' }}">À propos</a></li>
        <li><a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard*') ? 'active' : '' }}">Dashboard</a></li>
    </ul>
</nav>

