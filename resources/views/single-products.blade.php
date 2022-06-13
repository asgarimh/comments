@extends('layouts.app')

@section('content')
    <div class="container" style="direction: rtl">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <hr>
                <p>{{ $product->price }}</p>
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
                        <input type="hidden" name="commentable_id" value="{{ $product->id }}">
                        <input type="hidden" name="commentable_type" value="{{ get_class($product) }}">

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
            @foreach($product->comments as $comment)

                <div class="card-body">
                    {{ $comment->user->name }}
                      <p>{{ $comment->comment }}</p>
                </div>

            @endforeach
        </div>
    </div>
@endsection


