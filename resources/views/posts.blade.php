@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">

                @foreach($posts as $post)
                    <div class="col-md-3 card" style="direction: rtl;margin: 5px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <hr>
                            <p>{{ $post->price }}</p>
                            <p class="btn btn-primary"><a href="/posts/{{ $post->id }}" style="color: white">جزئیات محصول  </a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
@endsection


