@extends('layouts.app')
@section('hero')
    @include('app.partials.hero')
@endsection
@section('content')
    <div class="row mt-5">
        <div class="col-12 p-3">
            <img src="{{$article->img}}" class="border rounded mx-auto d-block" alt="...">
            <h5 class="mt-5">{{$article->title}}</h5>
            <p>
                @foreach($article->tags as $tag)
                    @if($loop->last)
                        <a href="{{ route('article.tag', $tag->id) }}" style="text-decoration: none;">
                            <span class="tag">{{$tag->label}}</span>
                        </a>
                    @else
                        <a href="{{ route('article.tag', $tag->id) }}" style="text-decoration: none;">
                            <span class="tag">{{$tag->label}} |</span>
                        </a>
                    @endif
                @endforeach
            </p>
            <p class="card-text">{{$article->body}}</p>
            <p>Published: <i>{{$article->createdAtForHumans()}}</i></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <form action="">
            <div class="mb-3">
                <label for="commentSubject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="commentSubject">
            </div>
            <div class="mb-3">
                <label for="commentBody" class="form-label">Comment</label>
                <textarea class="form-control" id="commentBody" rows="3"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Send</button>
        </form>
        <div class="toast-container pb-2 mt-5 mx-auto">
            @foreach($article->comments as $comment)
                <div class="toast showing" style="min-width: 100%;">
                    <div class="toast-header">
                        <img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" class="rounded me-2" alt="...">
                        <strong class="me-auto">{{$comment->subject}}</strong>
                        <small class="text-muted">{{$comment->createdAtForHumans()}}</small>
                    </div>
                    <div class="toast-body">
                        {{$comment->body}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
