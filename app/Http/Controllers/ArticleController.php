<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // /articles/{id}
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', [
            'id' => $article->id,
            'title' => $article->title,
            'description' => $article->description,
        ]);
    }

    // /articles/creer
    public function createDefault()
    {
        Article::create([
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.',
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.',
        ]);

        return 'Articles créés avec succès.';
    }

    // /articles/modifier/{id}
    public function updateStatic($id)
    {
        $article = Article::findOrFail($id);

        $article->title = 'Titre modifié pour l’article ' . $id;
        $article->description = 'Description modifiée pour l’article ' . $id;
        $article->save();

        return 'Article ' . $id . ' mis à jour.';
    }

    // /articles/supprimer/{id}
    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 'Article ' . $id . ' supprimé.';
    }
}
