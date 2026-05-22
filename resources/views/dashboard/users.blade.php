@extends('Dashboard')

@section('title', 'Utilisateurs — Dashboard')

@section('content')

<!-- NOTE: structure HTML globale fournie par Dashboard layout -->

<div class="toolbar">
    <input type="search" class="search-input" placeholder="Rechercher un utilisateur...">
</div>

<div class="panel">
    <div class="panel-header">
        <div class="panel-title">Tous les utilisateurs (305)</div>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Vérifié</th>
                <th>Inscrit le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-muted">1</td>
                <td>
                    <div class="user-cell">
                        <div class="user-init" style="background:#7B4F9E;color:#fff">CP</div>
                        Prof. Collin Predovic Jr.
                    </div>
                </td>
                <td class="text-muted">jesus.wintheiser@example.com</td>
                <td><span class="verified">✓ Vérifié</span></td>
                <td class="text-muted">17 avr. 2026</td>
                <td>
                    <div class="actions">
                        <button class="btn btn-edit" onclick="openEdit('Prof. Collin Predovic Jr.','jesus.wintheiser@example.com')">Éditer</button>
                        <button class="btn btn-danger">Suppr.</button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="pagination">
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
    </div>
</div>

<!-- CREATE MODAL -->
<div class="modal-overlay" id="createModal">
    <div class="modal">
        <div class="modal-header">
            <div class="modal-title">Nouvel utilisateur</div>
            <button class="modal-close" onclick="document.getElementById('createModal').classList.remove('open')">✕</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label class="form-label">Nom complet <span class="required">*</span></label>
                <input type="text" class="form-control" name="name" placeholder="Prénom Nom" required>
            </div>
            <div class="form-group">
                <label class="form-label">Email <span class="required">*</span></label>
                <input type="email" class="form-control" name="email" placeholder="utilisateur@exemple.com" required>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="document.getElementById('createModal').classList.remove('open')">Annuler</button>
            <button class="btn btn-primary">Créer l'utilisateur</button>
        </div>
    </div>
</div>

<!-- EDIT MODAL -->
<div class="modal-overlay" id="editModal">
    <div class="modal">
        <div class="modal-header">
            <div class="modal-title">Modifier l'utilisateur</div>
            <button class="modal-close" onclick="document.getElementById('editModal').classList.remove('open')">✕</button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label class="form-label">Nom complet <span class="required">*</span></label>
                <input type="text" class="form-control" id="edit-name" required>
            </div>
            <div class="form-group">
                <label class="form-label">Email <span class="required">*</span></label>
                <input type="email" class="form-control" id="edit-email" required>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-ghost" onclick="document.getElementById('editModal').classList.remove('open')">Annuler</button>
            <button class="btn btn-primary">Sauvegarder</button>
        </div>
    </div>
</div>

<script>
    function openEdit(name, email) {
        document.getElementById('edit-name').value = name;
        document.getElementById('edit-email').value = email;
        document.getElementById('editModal').classList.add('open');
    }

    document.querySelectorAll('.modal-overlay').forEach(overlay => {
        overlay.addEventListener('click', e => {
            if (e.target === overlay) overlay.classList.remove('open');
        });
    });
</script>

@endsection

