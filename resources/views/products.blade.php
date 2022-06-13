@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="row">

                    @foreach($products as $product)
                        <div class="col-md-3 card" style="direction: rtl;margin: 5px">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <hr>
                                <p>{{ $product->price }}</p>
                                <p class="btn btn-primary"><a href="/products/{{ $product->id }}" style="color: white" >جزئیات محصول</a> </p>
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>


    </div>
@endsection


