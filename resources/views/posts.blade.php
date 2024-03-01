@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->id }}">

                <h1>{!! $post->title !!}</h1>

            </a>
            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
@endsection
