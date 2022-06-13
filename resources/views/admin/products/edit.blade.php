@extends('layouts.app')

@section('content')
    <div class="container" style="direction: rtl">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">فرم ویرایش محصول</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('products.update' , $product->id) }}" method="POST">
                        @csrf
                        @method('patch')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">نام محصول</label>
                                <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="نام محصول را وارد کنید" value="{{ old('title' , $product->title) }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description',$product->description) }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">ویرایش محصول</button>
                            <a href="{{ route('products.index') }}" class="btn btn-default float-left">لغو</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





