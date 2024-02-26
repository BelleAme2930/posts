<!DOCTYPE html>
<html>
    <head>
        <title>Blog Posts</title>
        <link rel="stylesheet" href="/app.css">
    </head>
    <body>
     @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->slug }}">

                <h1>{{ $post->title }}</h1>

            </a>
            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
     @endforeach
    </body>
</html>
