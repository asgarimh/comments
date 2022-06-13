@extends('layouts.app')

@section('content')
    <div class="container" style="direction: rtl">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">فرم ایجاد پست</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">نام پست</label>
                                <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="نام پست را وارد کنید" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">ثبت پست</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-default float-left">لغو</a>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection









