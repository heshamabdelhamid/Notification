@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if (isset($posts) && $posts->count() > 0)
                        @foreach ($posts as $post)

                            <p class="text-primary"> {{ $post->user->name }} </p>
                            <h2 class=""> {{ $post->title }} </h3>
                            <h4 class="text-info"> {{ $post->body }} </h1>
                            <h2> - -----------------</h2>

                            @if ($post->comments()->count() > 0)

                            @foreach ($post->comments as $comment)
                            <h5 class="text-danger">{{ $comment->user->name }}</h5>
                            <h3 class="text-success">{{ $comment->content }}</h3>
                            @endforeach
                            <div class="input-group ">
                                <form action="" method="post">
                                    <input type="text" class="form-control" placeholder="write your comment">
                                </form>
                            </div>
                            <h2> - --------------------------------------------------------</h2>

                            @endif

                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
