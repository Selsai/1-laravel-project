@php
    use Illuminate\Support\Str;
@endphp

<article class="article">
    <h3>{{ $title }}</h3>
    <p>{{ Str::limit($description, 30, '...') }}</p>
</article>
