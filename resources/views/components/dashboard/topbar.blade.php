{{-- Topbar dashboard : lien "Voir le blog" + titre --}}

<div class="topbar">
    <div class="topbar-title">@yield('page_title', $title ?? $page_title ?? 'Dashboard')</div>

    <div class="topbar-actions">
        <a href="{{ route('home') }}" class="view-site">↗ Voir le blog</a>
    </div>
</div>

