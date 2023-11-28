@extends("layouts.admin")

@section("content")

    <h1>{{ $post->title }}</h1>
    @php
        $date = date_create($post->date);
    @endphp
    <p>Data di creazione: {{ date_format($date, "d/m/Y") }}</p>
    <p>Tempo di lettura previsto: {{ $post->reading_time }} min</p>
    <p>{{ $post->text }}</p>

@endsection
