@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur la page d’accueil</h2>
    <p>Bienvenue sur le site de {{ $name }}</p>

    <h2>Articles à la une</h2>

    @forelse ($articles as $article)
        <x-article
            :title="$article['title']"
            :description="$article['description']"
        />
    @empty
        <p>Aucun article à afficher.</p>
    @endforelse
@endsection
