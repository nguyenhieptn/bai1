@extends('templates.default')

@section('title') Home
@stop

@section('content')
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>TUNGFPM</h1>
      </div>

      <!-- Example row of columns -->
      <div class="row">

        @if($posts->count())
            @foreach($posts as $post)
                <div class="col-lg-4">
                <article>
                    <h2><a href="{{ URL::action('post-show', $post->slug) }}"> {{ $post -> title }}</a></h2>
                    <p class="text-danger">Published on {{ $post ->created_at-> format('l jS \\of F Y') }}</p>
                    {{Markdown::parse(Str::limit($post -> body , 300))}}
                    <p><a class="btn btn-primary" href="{{ URL::action('post-show', $post->slug) }}" role="button">View details &raquo;</a></p>
                </article>
                </div>
            @endforeach
        @endif

        </div>
@stop
