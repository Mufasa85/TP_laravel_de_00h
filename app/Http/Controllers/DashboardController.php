<?php

namespace App\Http\Controllers;

/**
 * Contrôleur des pages d'administration (dashboard).
 * Toutes les routes sont préfixées par /dashboard et nommées dashboard.*
 */
class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function articles()
    {
        return view('dashboard.articles');
    }

    public function categories()
    {
        return view('dashboard.categories');
    }

    public function users()
    {
        return view('dashboard.users');
    }

    public function comments()
    {
        return view('dashboard.comments');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }
}