@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur la page d’accueil</h2>
    <p>Bienvenue sur le site de {{ $name }}</p>

    <h2>Articles à la une</h2>

    @php
        use Illuminate\Support\Str;
    @endphp

    @forelse ($articles as $article)
        @if ($loop->last)
            @break
        @endif

        <x-article
            :title="$article['title']"
            :description="Str::limit($article['description'], 30, '...')"
        />
    @empty
        <p>Aucun article à afficher.</p>
    @endforelse
@endsection
