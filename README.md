# Évaluation — Mini Blog Laravel / Blade

**Module :** Développement Web avec Laravel
**Niveau :** L3 — Informatique et Logiciels
**Dépôt GitHub :** [Dr-Lab1/mini-blog-l3-il](https://github.com/Dr-Lab1/mini-blog-l3-il)

---

Non: MUSAFIRI MANENO RANDY L3 

## Mise en place du projet

Avant de commencer l'évaluation, effectuez les étapes suivantes dans l'ordre :

```bash
# 1. Cloner le dépôt GitHub
git clone https://github.com/Dr-Lab1/mini-blog-l3-il.git

# 2. Se déplacer dans le répertoire du projet
cd mini-blog-l3-il

# 3. Installer les dépendances PHP
composer install

# 4. Copier le fichier d'environnement
cp .env.example .env

# 5. Générer la clé de l'application
php artisan key:generate
```

> Assurez-vous d'avoir **PHP 8.1+**, **Composer** et **Laravel 10+** installés sur votre machine avant de commencer.

---

## Travail à réaliser

<!-- NOTE BlackboxAI: réponses théoriques ajoutées sous chaque question (Q1..Q7) -->


### Question 1 — Layouts Blade (racines des deux parties)

**Réponse Q1.1 :**
- `@yield('title')` : affiche le contenu de la section `title` si elle existe, sinon rien.
- `@yield('title', 'Valeur par défaut')` : affiche la section `title`, et si elle n’existe pas, affiche la valeur par défaut.

**Réponse Q1.2 :**
On utilise `@extends` pour factoriser header/footer (évite la duplication), et pour garder une seule source de vérité sur la structure HTML.

**Réponse Q1.3 :**
En séparant les layouts root (public `App.blade.php` vs admin `Dashboard.blade.php`) et en forçant chaque vue enfant dashboard à faire `@extends('Dashboard')`.



Créez deux fichiers root Blade distincts :

- `resources/views/App.blade.php` → pour la **partie publique** du blog
- `resources/views/Dashboard.blade.php` → pour la **partie dashboard** (administration)

Chaque root doit utiliser les directives `@yield` pour définir les zones dynamiques (au minimum : `title`, `content`). Chaque vue enfant devra utiliser `@extends` pour hériter du bon layout et `@section` / `@endsection` pour injecter son contenu dans les zones correspondantes.

**Questions :**

1. Quelle est la différence entre `@yield('title')` et `@yield('title', 'Valeur par défaut')` ?
2. Pourquoi utilise-t-on `@extends` plutôt que d'inclure le header et le footer manuellement dans chaque fichier de vue ?
3. Comment s'assure-t-on qu'une vue du dashboard n'étende jamais accidentellement le layout public ?

---

### Question 2 — Assets & Composants de la partie publique

**Réponse Q2 (cours rapide) :**
- `asset('css/....')` génère l’URL publique correcte vers `public/`.
- `@include('components.header')` / `@include('components.footer')` réutilise les morceaux de Blade sans dupliquer le HTML.



1. Déplacez le fichier `index.css` dans le dossier `public/css/`.
2. Référencez-le dans vos layouts en utilisant la fonction **`asset()`** de Laravel.
3. Créez deux **composants Blade anonymes** :
   - `resources/views/components/header.blade.php`
   - `resources/views/components/footer.blade.php`
4. Incluez ces composants dans le layout public en utilisant la syntaxe `@include()`.


---

### Question 3 — Assets & Composants du dashboard

**Réponse Q3.1 :**
On met `class="active"` dynamiquement avec `request()->routeIs('dashboard.articles')` (ou `Route::currentRouteName()`).

**Réponse Q3.2 :**
Placer les composants dashboard dans `components/dashboard/` rend le code plus organisé, évite les collisions de noms, et clarifie le périmètre (public vs admin).



1. Déplacez le fichier `Dashboard.css` dans le dossier `public/css/`.
2. Référencez-le dans vos layouts en utilisant la fonction **`asset()`**.
3. Créez deux composants Blade pour le dashboard :
   - `resources/views/components/dashboard/topbar.blade.php`
   - `resources/views/components/dashboard/sidebar.blade.php`
4. Incluez ces composants dans `Dashboard.blade.php`.

**Questions :**

1. Comment rendre la classe `active` d'un lien de la sidebar **dynamique** selon la route courante, en utilisant `request()->routeIs()` ou `Route::currentRouteName()` ?
2. Pourquoi est-il préférable de placer les composants du dashboard dans un sous-dossier `components/dashboard/` plutôt que directement dans `components/` ?

---

### Question 4 — Création des routes

**Réponse Q4.1 :**
- `Route::get()` : pour récupérer des ressources (lecture, affichage).
- `Route::post()` : pour envoyer des données (création/modification via formulaires).

**Réponse Q4.2 :**
`->name('...')` donne un nom à la route : indispensable pour utiliser `route('nom')` dans les vues Blade (évite de hardcoder les URLs).

**Réponse Q4.3 :**
Un paramètre `{id}` (ou `{slug}`) est passé au contrôleur via l’argument de la méthode (`show($id)`, `article($slug)`, etc.). Laravel l’injecte automatiquement.

**Réponse Q4.4 :**
Si URL identique mais méthodes HTTP différentes, Laravel les distingue : `GET /x` et `POST /x` peuvent coexister et chacune appelle sa route.



Dans le fichier `routes/web.php`, déclarez une route nommée pour chacune des vues suivantes :

**Partie publique :**

| URL | Nom de la route | Description |
|---|---|---|
| `/` | `home` | Page d'accueil |
| `/articles` | `articles.index` | Liste des articles |
| `/articles/{slug}` | `articles.show` | Détail d'un article |
| `/categories` | `categories.index` | Liste des catégories |
| `/about` | `about` | Page à propos |

**Questions :**

1. Quelle est la différence entre `Route::get()` et `Route::post()` ? Dans quel cas utilise-t-on l'un plutôt que l'autre ?
2. Comment déclarer et nommer une route avec la méthode `->name()` ? Pourquoi les noms de routes sont-ils indispensables pour utiliser `route()` dans les vues Blade ?
3. Qu'est-ce qu'un paramètre de route dynamique comme `{id}` ? Comment le récupérer dans le contrôleur ?
4. Que se passe-t-il si deux routes ont la même URL mais des méthodes HTTP différentes (`GET` et `POST`) ?

---

### Question 5 — Groupement des routes du dashboard

**Réponse Q5.1 :**
Exemple :
```php
Route::prefix('dashboard')->name('dashboard.')->group(function () {
   Route::get('/', ...)->name('index');
});
```

**Réponse Q5.2 :**
- `Route::prefix()` ajoute un préfixe d’URL.
- `Route::middleware()` ajoute une ou plusieurs middlewares (logique/exécution) aux routes du groupe.

**Réponse Q5.3 :**
`Route::resource()` génère automatiquement les routes CRUD (index/show/create/store/edit/update/destroy) pour une ressource donnée (ex: articles, categories).



Créez un **groupe de routes** pour toutes les pages du dashboard en utilisant `Route::prefix()` et `->group()`.

Toutes les routes du dashboard doivent :
- Avoir le **préfixe d'URL** `/dashboard`
- Avoir le **préfixe de nom** `dashboard.`
- Pointer vers les méthodes de `DashboardController`

Exemple de routes attendues :

| URL | Nom de la route | Méthode du contrôleur |
|---|---|---|
| `/dashboard` | `dashboard.index` | `index` |
| `/dashboard/articles` | `dashboard.articles` | `articles` |
| `/dashboard/categories` | `dashboard.categories` | `categories` |
| `/dashboard/utilisateurs` | `dashboard.users` | `users` |
| `/dashboard/commentaires` | `dashboard.comments` | `comments` |
| `/dashboard/reglages` | `dashboard.settings` | `settings` |

**Questions :**

1. Quelle est la syntaxe complète pour créer un groupe de routes avec un préfixe d'URL et un préfixe de nom en même temps ?
2. Quelle est la différence entre `Route::prefix()` et `Route::middleware()` dans un groupe de routes ?
3. Qu'est-ce que `Route::resource()` ? Pour quelles ressources (articles, catégories, utilisateurs) serait-il pertinent de l'utiliser et quelles routes génère-t-il automatiquement ?

---

### Question 6 — Création des contrôleurs

**Réponse Q6.1 :**
- Contrôleur simple : `php artisan make:controller MainController`
- Ressource CRUD : `php artisan make:controller MainController --resource`

**Réponse Q6.2 :**
- `index()` : liste
- `show($id)` : détail d’un élément
- `create()` : formulaire création
- `store(Request $request)` : créer en base
- `edit($id)` : formulaire édition
- `update(Request $request, $id)` : mettre à jour
- `destroy($id)` : supprimer

**Réponse Q6.3 :**
- Tableau associatif : on choisit explicitement les clés.
- `compact()` : construit automatiquement le tableau à partir des variables locales.
- `with()` : attache une donnée à la vue (méthode chaînable).



Générez les deux contrôleurs suivants via la commande `php artisan make:controller` :


**`MainController`** — gérera toutes les vues publiques :
- `index()` → vue de la page d'accueil
- `articles()` → vue de la liste des articles
- `article($slug)` → vue du détail d'un article
- `categories()` → vue de la liste des catégories
- `about()` → vue de la page à propos

**`DashboardController`** — gérera toutes les vues du dashboard :
- `index()` → vue principale du dashboard
- `articles()` → vue des articles (admin)
- `categories()` → vue des catégories (admin)
- `users()` → vue des utilisateurs
- `comments()` → vue des commentaires
- `settings()` → vue des réglages

Chaque méthode doit retourner sa vue correspondante avec `return view('...')`.

**Questions :**

1. **Commande artisan :**
   - Générer un contrôleur : `php artisan make:controller MainController`
   - Générer un **contrôleur de ressource** (CRUD complet) : `php artisan make:controller MainController --resource` (ou `-r`)

2. **Convention des méthodes d’un contrôleur de ressource Laravel :**
   - `index()` → liste des ressources (ex: tous les articles)
   - `show($id)` → afficher une ressource unique (ex: un article)
   - `create()` → afficher le formulaire de création
   - `store(Request $request)` → enregistrer la nouvelle ressource
   - `edit($id)` → afficher le formulaire de modification
   - `update(Request $request, $id)` → mettre à jour la ressource existante
   - `destroy($id)` → supprimer la ressource

3. **Différence entre ces 3 façons de passer des données à une vue :**
   - `return view('articles', ['posts' => $posts]);`
     - Passe un tableau associatif directement.
   - `return view('articles', compact('posts'));`
     - `compact('posts')` construit automatiquement le tableau à partir de la(les) variable(s) existante(s) (`$posts`).
   - `return view('articles')->with('posts', $posts);`
     - Utilise la méthode `with()` pour attacher la donnée à la vue (chaînable).

---

### Question 7 — Liens et navigation

**Réponse Q7 :**
On remplace les liens en dur (`/dashboard`, `#`, `index.html`, etc.) par des liens basés sur les routes Laravel (`route('home')`, `route('dashboard.index')`, `route('articles.show', ['slug'=>...])`) pour que la navigation reste cohérente et robuste.




Sont concernés (liste non exhaustive) :
- Les liens de la navbar publique (Accueil, Articles, Catégories, À propos)
- Les liens de la sidebar du dashboard (Dashboard, Articles, Catégories, Utilisateurs, Commentaires, Réglages)
- Le lien « Voir le blog » dans la topbar du dashboard
- Le lien « Dashboard / Admin » dans le footer public
- Les liens « Voir tout → » sur la page d'accueil
- Les liens sur les cartes d'articles (qui mènent vers le détail d'un article)
- Le breadcrumb sur la page article
- Le bouton « ↗ Voir le blog » dans le dashboard

---

## 📁 Structure de fichiers attendue

À la fin de l'évaluation, votre projet doit respecter l'arborescence suivante :

```
resources/
└── views/
    ├── app.blade.php       ← Layout partie publique
    ├── dashboard.blade.php ← Layout dashboard
    ├── components/
    │   ├── header.blade.php           ← Header public
    │   ├── footer.blade.php           ← Footer public
    │   └── dashboard/
    │       ├── topbar.blade.php       ← Topbar dashboard
    │       └── sidebar.blade.php      ← Sidebar dashboard
    ├── public/                        ← Vues publiques
    │   ├── index.blade.php
    │   ├── articles.blade.php
    │   ├── article.blade.php
    │   ├── categories.blade.php
    │   └── about.blade.php
    └── dashboard/                     ← Vues dashboard
        ├── index.blade.php
        ├── articles.blade.php
        ├── categories.blade.php
        ├── users.blade.php
        ├── comments.blade.php
        └── settings.blade.php

app/
└── Http/
    └── Controllers/
        ├── MainController.php
        └── DashboardController.php

public/
└── css/
    ├── public.css
    └── dashboard.css

routes/
└── web.php
```

---

## Critères d'évaluation

| Critère | Points |
|---|---|
| Layouts Blade corrects avec `@extends`, `@yield`, `@section` | 3 pts |
| Composants publics (header, footer) fonctionnels avec `asset()` | 3 pts |
| Composants dashboard (topbar, sidebar) fonctionnels avec `asset()` | 3 pts |
| Routes publiques nommées et correctement déclarées | 3 pts |
| Routes dashboard groupées avec préfixe et nommage cohérent | 3 pts |
| Contrôleurs créés avec les bonnes méthodes et retours de vues | 3 pts |
| Liens Blade partout | 4 pts |
| Réponses aux questions théoriques | 8 pts |
| **Total** | **30 pts** |

---

## Consignes générales

- Le travail est **individuel**.
- Soumettez votre travail en poussant votre code sur un dépôt GitHub **personnel** et en partageant le lien.
- Le dépôt doit contenir un fichier `.env.example` à jour mais **jamais** le fichier `.env` lui-même.
- Toute ressemblance de code entre deux rendus entraînera un **zéro** pour les deux parties concernées.
- Les réponses aux questions théoriques sont à rédiger directement dans ce fichier `README.md`, sous chaque question.

**Bonne évaluation !**

