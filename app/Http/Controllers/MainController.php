<?php

namespace App\Http\Controllers;

/**
 * Contrôleur des pages publiques du blog.
 * Chaque méthode retourne une vue Blade via return view('...').
 */
class MainController extends Controller
{
    /** Page d'accueil — route GET / nommée "home" */
    public function index()
    {
        return view('public.index');
    }

    /** Liste des articles — route GET /articles nommée "articles.index" */
    public function articles()
    {
        return view('public.articles');
    }

    /**
     * Détail d'un article — route GET /articles/{slug}
     * Le paramètre {slug} est injecté automatiquement dans $slug.
     */
    public function article(string $slug)
    {
        return view('public.article', compact('slug'));
    }

    /** Liste des catégories — route GET /categories */
    public function categories()
    {
        return view('public.categories');
    }

    /** Page à propos — route GET /about */
    public function about()
    {
        return view('public.about');
    }
}