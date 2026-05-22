@extends('App')

{{-- Page "liste des articles" publique --}}

@section('title', 'Le Blog — Articles')

@section('content')
    <header class="page-header">
        <div class="page-tag">Blog</div>
        <h1 class="page-title">Tous les articles</h1>
        <div class="page-count">Exemple de liste (UI)</div>
    </header>

    <section class="filters-bar">
        <div class="search-wrap">
            <input type="search" placeholder="Rechercher un article..." />
        </div>
        <div class="filter-cats">
            <a href="{{ route('articles.index') }}" class="cat-pill active">Toutes</a>
            <a href="{{ route('articles.index') }}" class="cat-pill">Vitae</a>
            <a href="{{ route('articles.index') }}" class="cat-pill">Optio</a>
        </div>
    </section>

    <main class="main-layout">
        <section class="articles-col">
            <div class="articles-list">
                <a href="{{ route('articles.show', ['slug' => 'excepturi-eligendi-art-1']) }}" class="article-item">
                    <div>
                        <div class="ai-cat">Vitae</div>
                        <div class="ai-title">Excepturi eligendi aliquid iste laboriosam</div>
                        <div class="ai-excerpt">Recusandae non totam rerum vero at. Vel ut soluta ipsum nihil aut natus
                            suscipit explicabo.</div>
                        <div class="ai-meta">
                            <span>Jacklyn Lueilwitz</span>
                            <span>15 juillet 2015</span>
                            <span>5 commentaires</span>
                        </div>
                    </div>
                    <div class="ai-thumb c1">E</div>
                </a>

                <a href="{{ route('articles.show', ['slug' => 'aut-repellat-art-2']) }}" class="article-item">
                    <div>
                        <div class="ai-cat">Aperiam</div>
                        <div class="ai-title">Aut repellat ut qui et</div>
                        <div class="ai-excerpt">Pariatur nobis dicta esse cum. Magni nesciunt facere exercitationem.</div>
                        <div class="ai-meta">
                            <span>Dr. Travon Kirlin</span>
                            <span>8 oct. 2019</span>
                        </div>
                    </div>
                    <div class="ai-thumb c2">A</div>
                </a>

                <a href="{{ route('articles.show', ['slug' => 'dignissimos-art-3']) }}" class="article-item">
                    <div>
                        <div class="ai-cat">Optio</div>
                        <div class="ai-title">Dignissimos et eaque aut sed fugiat et</div>
                        <div class="ai-excerpt">Voluptas quod nihil voluptatum animi voluptates mollitia sed.</div>
                        <div class="ai-meta">
                            <span>Dr. Jenifer Sipes</span>
                            <span>23 sept. 1988</span>
                        </div>
                    </div>
                    <div class="ai-thumb c3">D</div>
                </a>
            </div>

            <div class="pagination">
                <a class="page-btn active" href="{{ route('articles.index') }}">1</a>
                <a class="page-btn" href="{{ route('articles.index') }}">2</a>
                <a class="page-btn" href="{{ route('articles.index') }}">3</a>
            </div>
        </section>

{{-- NOTE: remplace le texte de l'anciene maquette si besoin --}}
        <aside class="sidebar-col">

            <div class="sidebar-block">
                <div class="sidebar-label">Populaire</div>
                <a href="{{ route('articles.show', ['slug' => 'excepturi-eligendi-art-1']) }}" class="popular-item">
                    <div class="pop-num">1</div>
                    <div>
                        <div class="pop-title">Excepturi eligendi...</div>
                        <div class="pop-cat">Vitae</div>
                    </div>
                </a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Catégories</div>
                <a href="{{ route('categories.index') }}" class="cat-item">Vitae <span class="cat-count">10</span></a>
                <a href="{{ route('categories.index') }}" class="cat-item">Optio <span class="cat-count">10</span></a>
            </div>

            <div class="sidebar-block">
                <div class="sidebar-label">Tags</div>
                <div class="tag-cloud">
                    <a href="{{ route('articles.index') }}" class="tag">Optio</a>
                    <a href="{{ route('articles.index') }}" class="tag">Laboriosam</a>
                    <a href="{{ route('articles.index') }}" class="tag">Eligendi</a>
                </div>
            </div>
        </aside>
    </main>
@endsection

