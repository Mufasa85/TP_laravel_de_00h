@extends('App')

{{-- Page "à propos" publique --}}

@section('title', 'Le Blog — À propos')

@section('content')
    <section class="about-hero">
        <div class="hero-left">
            <div class="page-tag">À propos</div>
            <h1 class="page-title">Un blog pour <em>partager</em> et <em>apprendre</em></h1>
            <p class="page-intro">Un espace de réflexion, d'exploration et de partage. Nous publions des articles
                soignés sur des sujets qui comptent vraiment.</p>

            <div class="hero-stats">
                <div>
                    <div class="stat-num">50</div>
                    <div class="stat-label">Articles publiés</div>
                </div>
                <div>
                    <div class="stat-num">5</div>
                    <div class="stat-label">Catégories</div>
                </div>
                <div>
                    <div class="stat-num">250</div>
                    <div class="stat-label">Commentaires</div>
                </div>
            </div>
        </div>

        <div class="hero-right">
            <div class="manifesto-block">
                <div class="manifesto-text">"Des idées qui valent la peine d'être lues."</div>
                <div class="manifesto-sub">— L'équipe du blog</div>
            </div>
        </div>
    </section>

    <section class="mission-section">
        <div class="section-heading">Mission</div>
        <div class="mission-content">
            <p>Rendre la connaissance accessible : articles clairs, structurés et utiles.</p>
            <p>Partager des idées avec bienveillance et curiosité.</p>
        </div>
    </section>

    <section class="values-section">
        <div class="values-header">
            <div class="values-tag">Nos valeurs</div>
            <div class="values-title">Qualité, clarté, respect</div>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="value-num">01</div>
                <div class="value-name">Qualité</div>
                <div class="value-desc">Contenu vérifié et soigné.</div>
            </div>
            <div class="value-card">
                <div class="value-num">02</div>
                <div class="value-name">Clarté</div>
                <div class="value-desc">Structure simple, lecture facile.</div>
            </div>
            <div class="value-card">
                <div class="value-num">03</div>
                <div class="value-name">Respect</div>
                <div class="value-desc">Échanges positifs et constructifs.</div>
            </div>
        </div>
    </section>
@endsection

