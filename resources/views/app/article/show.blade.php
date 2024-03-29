@extends('layouts.app')
@section('content')

    <div id="app">
        <div class="row mt-5">
            <div class="col-12 p-3">
                <img src="{{ $article->img }}" class="border rounded mx-auto d-block" alt="...">
{{--                <article-component></article-component>--}}
                <h5 class="mt-5">{{ $article->title }}</h5>
                <p>
                    @foreach($article->tags as $tag)
                        @if ($loop->last)
                            <span class="tag">{{ $tag->label }}</span>
                        @else
                            <span class="tag">{{ $tag->label }} |</span>
                        @endif
                    @endforeach
                </p>
                <p class="card-text">{{ $article->body }}</p>
                <p>Опубликовано: <i>{{ $article->createdAtForHumans()}}</i></p>
                <div class="mt-3">
                    <span class="badge bg-primary">{{ $article->state->likes }} <i class="bi bi-hand-thumbs-up"></i></span>
                    <span class="badge bg-danger">{{ $article->state->views }} <i class="bi bi-eye"></i></span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <form action="">
                <div class="mb-3 mt-3">
                    <label for="commentSubject" class="form-label">Тема комментария</label>
                    <input type="text" class="form-control" id="commentSubject">
                </div>
                <div class="mb-3">
                    <label for="commentBody" class="form-label">Комментарий</label>
                    <textarea class="form-control" id="commentBody" rows="3"></textarea>
                </div>
                <button class="btn btn-outline-success" type="submit">Отправить</button>
            </form>
            <div class="position-relative bd-example-toasts">
                <div class="toast-container position-absolute p-3">
                    @foreach($article->comments as $comment)
                        <div>
                            <div class="toast-header">
                                <img class="rounded me-2"
                                     src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User"
                                     alt="..."
                                >
                                <strong class="me-auto">{{ $comment->subject }}</strong>
                                <small class="text-muted">{{ $comment->createdAtForHumans()}}</small>
                            </div>
                            <div class="toast-body">
                                {{ $comment->body }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
@section('vue')
    <script src="{{ Vite::asset('resources/js/app.js') }}" type="module"></script> {{-- already switched in app.blade.php with @vite --}}
@endsection
