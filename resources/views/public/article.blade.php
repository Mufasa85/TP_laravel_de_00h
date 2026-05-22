@extends('App')

{{-- Page "détail d'un article" publique --}}

@section('title', 'Le Blog — Article')

@section('content')
    <header class="article-hero">
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <a href="{{ route('articles.index') }}">Articles</a>
            <span>/</span>
            {{-- slug dynamique : affichage simple --}}
            <span>{{ $slug ?? 'article' }}</span>
        </div>

        <div class="article-cat">Optio</div>
        <h1 class="article-title">Excepturi eligendi aliquid iste laboriosam</h1>

        <div class="article-meta-bar">
            <div class="author-block">
                <div class="author-avatar">JL</div>
                <div>
                    <div class="author-name">Jacklyn Lueilwitz</div>
                    <div class="author-sub">Auteur</div>
                </div>
            </div>

            <div class="meta-item"><strong>Publié le</strong> 15 juillet 2015</div>
            <div class="meta-item"><strong>5</strong> commentaires</div>
            <div class="meta-item"><strong>Catégorie :</strong> Optio</div>
            <button class="share-btn">↗ Partager</button>
        </div>
    </header>

    <div class="article-layout">
        <main class="article-body">
            <p class="article-lead">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus
                suscipit explicabo. Non pariatur accusantium possimus molestiae et numquam est aperiam.</p>

            <div class="article-content">
                <p>Excepturi consequuntur et voluptatem adipisci doloribus et. Tenetur eligendi earum qui sunt qui.
                    Facilis unde iure perferendis commodi corrupti blanditiis earum.</p>

                <h2>Une perspective nouvelle</h2>

                <p>Rem id et amet est. Nostrum ab inventore deserunt et fuga perferendis dolore.</p>

                <blockquote>
                    "Ea officiis tempore dignissimos quia impedit rerum repudiandae et. Tenetur et et at."
                </blockquote>

                <p>Rerum aut id ipsum voluptatem quia doloremque.</p>

                <h2>Pour aller plus loin</h2>
                <p>Harum veritatis qui ex animi perspiciatis laudantium.</p>
            </div>

            <div class="article-tags">
                <a href="#" class="tag">Optio</a>
                <a href="#" class="tag">Laboriosam</a>
                <a href="#" class="tag">Eligendi</a>
            </div>
        </main>

        {{-- Sidebar UI simplifiée --}}
        <aside class="sidebar">
            <div class="sidebar-block">
                <div class="sidebar-label">Table des matières</div>
                <ul class="toc-list">
                    <li><a href="#"><span>01</span> Introduction</a></li>
                    <li><a href="#"><span>02</span> Perspective</a></li>
                </ul>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Articles récents</div>
                <a href="{{ route('articles.show', ['slug' => 'aut-repellat-art-2']) }}" class="related-card">
                    <div class="related-cat">Aperiam</div>
                    <div class="related-title">Aut repellat ut qui et</div>
                    <div class="related-date">8 octobre 2019</div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <div style="display:flex;flex-direction:column;gap:0.5rem">
                    <a href="{{ route('categories.index') }}" style="text-decoration:none;color:var(--ink);font-size:0.85rem;display:flex;justify-content:space-between;padding:0.4rem 0;border-bottom:1px solid var(--border)">Vitae <span style="color:var(--muted)">10</span></a>
                </div>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">À propos de l'auteur</div>
                <div style="display:flex;gap:1rem;align-items:flex-start">
                    <div class="author-avatar" style="width:52px;height:52px;font-size:1rem;flex-shrink:0">JL</div>
                    <div>
                        <div style="font-weight:500;font-size:0.9rem;margin-bottom:0.3rem">Jacklyn Lueilwitz</div>
                        <div style="font-size:0.8rem;color:var(--muted);line-height:1.6">Rédactrice passionnée.</div>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    <section class="comments-section">
        <h2 class="comments-title">5 Commentaires</h2>
        {{-- UI seulement --}}
        <div class="comment">
            <div class="comment-avatar">UR</div>
            <div>
                <div class="comment-author">Ut Reiciendis</div>
                <div class="comment-date">17 avril 2026 à 06:35</div>
                <div class="comment-text">Ut reiciendis et totam animi sed commodi facere.</div>
            </div>
        </div>
    </section>
@endsection

