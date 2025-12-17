@extends('layouts.app')

@section('title', "Détails de l’article #{$id}")

@section('content')
    <x-article
        :title="$title"
        :description="$description"
    />
@endsection
