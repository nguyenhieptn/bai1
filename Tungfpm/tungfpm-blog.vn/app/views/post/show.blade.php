@extends('templates.default')

@section('title') {{ $post -> title }} @stop

@section('content')
    <!-- Jumbotron -->
          <div class="jumbotron">
            <h1>Tungfpm</h1>
          </div>

          <!-- Example row of columns -->
          <div class="row">
            <div class="col-lg-12">
                    <article>
                        <h2><a href="{{ URL::action('post-show', $post->slug) }}"> {{ $post -> title }}</a></h2>
                        <p class="text-danger">Published on {{ $post ->created_at-> format('l jS \\of F Y') }}</p>
                           {{ Markdown::parse($post -> body) }}
                        <p>{{ link_to_route('home', 'Return to all posts') }}</p>
                    </article>
            </div>
          </div>


@stop
