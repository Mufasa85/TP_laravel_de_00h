@extends('App')

{{-- Page "liste des catégories" publique --}}

@section('title', 'Le Blog — Catégories')

@section('content')
    <header class="page-header">
        <div class="page-tag">Catégories</div>
        <h1 class="page-title">Explorer nos thèmes</h1>
        <div class="page-count">Exemple de contenu</div>
    </header>

    <section class="cats-hero">
        <a href="{{ route('categories.index') }}" class="cat-hero-card">
            <div class="ch-num">5</div>
            <div class="ch-name">Vitae</div>
            <div class="ch-count">10 articles</div>
            <div class="ch-arrow">→</div>
        </a>
        <a href="{{ route('categories.index') }}" class="cat-hero-card">
            <div class="ch-num">5</div>
            <div class="ch-name">Optio</div>
            <div class="ch-count">10 articles</div>
            <div class="ch-arrow">→</div>
        </a>
        <a href="{{ route('categories.index') }}" class="cat-hero-card">
            <div class="ch-num">5</div>
            <div class="ch-name">Aperiam</div>
            <div class="ch-count">10 articles</div>
            <div class="ch-arrow">→</div>
        </a>
        <a href="{{ route('categories.index') }}" class="cat-hero-card">
            <div class="ch-num">5</div>
            <div class="ch-name">Tenetur</div>
            <div class="ch-count">10 articles</div>
            <div class="ch-arrow">→</div>
        </a>
        <a href="{{ route('categories.index') }}" class="cat-hero-card">
            <div class="ch-num">5</div>
            <div class="ch-name">Dignissimos</div>
            <div class="ch-count">10 articles</div>
            <div class="ch-arrow">→</div>
        </a>
    </section>

    <section class="cats-content">
        <div class="cat-section">
            <div class="cat-section-header">
                <div class="cat-section-meta">
                    <div class="cs-tag">Vitae</div>
                    <div class="cs-name">Vitae</div>
                    <div class="cs-desc">Articles sur la vie et l'inspiration.</div>
                    <div class="cs-count">10 articles</div>
                    <a href="{{ route('articles.index') }}" class="cs-link">Voir les articles →</a>
                </div>
            </div>
        </div>
    </section>
@endsection

