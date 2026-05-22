@extends('Dashboard')

@section('title', 'Réglages — Dashboard')

@section('content')

<!-- NOTE: contenu injecté dans le layout Dashboard -->

<nav class="settings-nav">
    <button class="settings-nav-item active" onclick="showSection('general',this)">◈ Général</button>
    <button class="settings-nav-item" onclick="showSection('compte',this)">◌ Mon compte</button>
    <button class="settings-nav-item" onclick="showSection('lecture',this)">◻ Lecture</button>
    <button class="settings-nav-item" onclick="showSection('commentaires',this)">◗ Commentaires</button>
    <button class="settings-nav-item" onclick="showSection('email',this)">✉ Email</button>
    <button class="settings-nav-item" onclick="showSection('seo',this)">◌ SEO</button>
    <button class="settings-nav-item" onclick="showSection('danger',this)" style="color:#E74C3C;margin-top:auto">⚠ Zone de danger</button>
</nav>

<div class="settings-panels">
    <div class="panel" id="section-general">
        <div class="panel-header">
            <div class="panel-title">Paramètres généraux</div>
            <div class="panel-desc">Informations de base</div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="form-label">Nom du blog <span class="required">*</span></label>
                <input type="text" class="form-control" name="site_name" value="Le Blog">
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-ghost">Annuler</button>
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

    <div class="panel" id="section-compte" style="display:none">
        <div class="panel-header">
            <div class="panel-title">Mon compte</div>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="Admin">
            </div>
        </div>
    </div>
</div>

<script>
    function showSection(id, btn) {
        document.querySelectorAll('[id^="section-"]').forEach(p => p.style.display = 'none');
        document.getElementById('section-' + id).style.display = 'block';
        document.querySelectorAll('.settings-nav-item').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    }
</script>

@endsection

