@extends('layouts.app')

@section('content')
    <div class="container" style="direction: rtl">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
                <hr>
                <p>{{ $post->price }}</p>
            </div>
        </div>


        @auth()
            <div class="card mt-3">
                <div class="card-header">
                    ارسال نظر
                </div>
                <div class="card-body">

                    <form action="{{ route('send.comment') }}" method="post">
                        @csrf
                        <input type="hidden" name="commentable_id" value="{{ $post->id }}">
                        <input type="hidden" name="commentable_type" value="{{ get_class($post) }}">

                        <div class="form-group">
                            <label for="exampleInputPassword1">متن کامنت</label>
                            <textarea name="comment" class="form-control">

                        </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        @endauth
        <div class="card mt-3">
            <div class="card-header">
                کامنت ها
            </div>

            @foreach($post->comments as $comment)
            <div class="card-body">


                <input class="form-control mb-3">
                <textarea class="form-control mt-3">

                    {{ $comment->comment }}
                </textarea>
            </div>
            @endforeach
        </div>
    </div>
@endsection


