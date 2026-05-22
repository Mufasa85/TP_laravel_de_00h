@extends('Dashboard')

@section('title', 'Commentaires — Dashboard')

@section('content')

<!-- NOTE: contenu injecté dans le layout Dashboard -->

<div class="stats-row">
    <div class="stat-card">
        <div class="stat-icon">◗</div>
        <div class="stat-info">
            <div class="stat-num">250</div>
            <div class="stat-lbl">Total</div>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="color:var(--success)">◈</div>
        <div class="stat-info">
            <div class="stat-num">218</div>
            <div class="stat-lbl">Approuvés</div>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="color:var(--warning)">◘</div>
        <div class="stat-info">
            <div class="stat-num">24</div>
            <div class="stat-lbl">En attente</div>
        </div>
    </div>
    <div class="stat-card">
        <div class="stat-icon" style="color:#E74C3C">✕</div>
        <div class="stat-info">
            <div class="stat-num">8</div>
            <div class="stat-lbl">Spam</div>
        </div>
    </div>
</div>

<div class="tabs">
    <button class="tab active">Tous (250)</button>
    <button class="tab">En attente (24)</button>
    <button class="tab">Approuvés (218)</button>
    <button class="tab">Spam (8)</button>
</div>

<div class="toolbar">
    <input type="search" class="search-input" placeholder="Rechercher dans les commentaires...">
    <select class="filter">
        <option>Tous les articles</option>
        <option>Excepturi eligendi aliquid...</option>
    </select>
    <button class="btn btn-ghost" style="margin-left:auto">Tout approuver</button>
</div>

<div class="comments-list">
    <div class="comment-row pending">
        <div class="c-avatar" style="background:#E67E22;color:#fff">WR</div>
        <div>
            <div class="c-meta">
                <span class="c-author">Weldon Walter</span>
                <span class="badge badge-pending">En attente</span>
                <span class="c-date">17 avr. 2026 à 06:35</span>
            </div>
            <div class="c-article">Sur : <a href="#">Article</a></div>
            <div class="c-text" style="margin-top:0.5rem">Molestiae modi minus molestiae.</div>
        </div>
        <div class="c-actions">
            <button class="btn btn-success" onclick="openView()">Voir</button>
            <button class="btn btn-warning">Spam</button>
        </div>
    </div>
</div>

<div class="pagination">
    <button class="page-btn active">1</button>
    <button class="page-btn">2</button>
</div>

<!-- VIEW MODAL -->
<div class="modal-overlay" id="viewModal">
    <div class="modal">
        <div class="modal-header">
            <div class="modal-title">Détail du commentaire</div>
            <button class="modal-close" onclick="document.getElementById('viewModal').classList.remove('open')">✕</button>
        </div>
        <div class="modal-body">
            <div class="info-row"><span class="info-label">Auteur</span><span>Weldon Walter</span></div>
            <div class="form-group">
                <label class="form-label">Contenu du commentaire</label>
                <textarea class="form-control">Molestiae modi minus molestiae...</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="document.getElementById('viewModal').classList.remove('open')">Fermer</button>
            <button class="btn btn-primary">Approuver</button>
        </div>
    </div>
</div>

<script>
    function openView() {
        document.getElementById('viewModal').classList.add('open');
    }

    document.querySelectorAll('.modal-overlay').forEach(o => o.addEventListener('click', e => {
        if (e.target === o) o.classList.remove('open');
    }));

    document.querySelectorAll('.tab').forEach(t => t.addEventListener('click', function() {
        document.querySelectorAll('.tab').forEach(x => x.classList.remove('active'));
        this.classList.add('active');
    }));
</script>

@endsection

