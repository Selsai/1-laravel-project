@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur la page d’accueil</h2>
    <p>Bienvenue sur le site de {{ $name }}</p>

      <h2>Articles à la une</h2>

    @forelse ($articles as $article)
        <article class="article">
            <h3>{{ $article['title'] }}</h3>
            <p>{{ $article['description'] }}</p>
        </article>
    @empty
        <p>Aucun article à afficher.</p>
    @endforelse

