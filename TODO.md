# TODO — Mini Blog Laravel / Blade (BlackboxAI)

- [ ] Créer les vues publiques : resources/views/public/{index,articles,article,categories,about}.blade.php
- [ ] Mettre à jour les layouts root : resources/views/App.blade.php et resources/views/dashboard.blade.php (yield/sections, asset CSS via asset()).
- [ ] Créer les composants dashboard : resources/views/components/dashboard/{topbar,sidebar}.blade.php
- [ ] Refactorer les vues dashboard existantes pour utiliser @extends('Dashboard') et injecter le HTML dans @section('content').
- [ ] Mettre la sidebar dynamique (classe active selon request()->routeIs('dashboard.*')).
- [ ] Mettre à jour les liens (public navbar + footer + topbar dashboard) pour utiliser route() / url() (plus de liens en dur).
- [ ] Répondre dans README.md sous chaque question (Q1..Q7) + remarques courtes.
- [ ] Tester : php artisan route:list et navigation dans le navigateur (pages publiques + dashboard).

