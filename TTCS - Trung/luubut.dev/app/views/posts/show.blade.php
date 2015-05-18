@extends('templates.default')

@section('content')
    <!-- Example row of columns -->
    <div class="row">

        @if($posts->count())
            @foreach($posts as $post)
                <div class="">
                    <article>
                        <h2><a href="{{ URL::action('post-show', $post->slug) }}"> {{ $post -> title }}</a></h2>
                        <p class="text-danger">Published on {{ $post ->created_at-> format('l jS \\of F Y') }}</p>
                        {{Markdown::parse(($post -> body))}}
                    </article>
                </div>
            @endforeach
        @endif

    </div>
    <p>{{ link_to_route('home', 'Return to all posts') }}</p>
@stop
