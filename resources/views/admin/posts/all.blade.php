@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-tools d-flex">

                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="btn-group-sm mr-1">
                            <a href="{{ route('posts.create') }}" class="btn btn-info">ایجاد پست جدید</a>
                        </div>
                        <h3 class="card-title">پست</h3>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="direction: rtl">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>آیدی پست</th>
                            <th>نام پست</th>
                            {{--{--                                <th>تعداد نظرات</th>--}}
                            <th>متن</th>
                            <th>عملیات</th>
                        </tr>

                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td class="d-flex">
                                    <form action="{{ route('posts.destroy' , $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger ml-1">حذف</button>
                                    </form>
                                    <a href="{{ route('posts.edit' , $post->id) }}" class="btn btn-sm btn-primary ml-1">ویرایش</a>

                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    </div>
@endsection








