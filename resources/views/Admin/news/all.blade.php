@extends('Admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="page-header head-section">
            <h2>خبر ها</h2>
            <a href="{{ route('news.create') }}" class="btn btn-sm btn-primary">ارسال خبر</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>عنوان خبر</th>
                    <th>تعداد نظرات</th>
                    <th>مقدار بازدید</th>
                    <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($newses as $news)
                    <tr>
                        <td><a href="{{ $news->path() }}">{{ $news->title }}</a></td>
                        <td>{{ $news->commentCount }}</td>
                        <td>{{ $news->viewCount }}</td>
                        <td>
                            <form action="{{ route('news.destroy'  , ['id' => $news->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                                <div class="btn-group btn-group-xs">
                                    <a href="{{ route('news.edit' , ['id' => $news->id]) }}"  class="btn btn-primary">ویرایش</a>
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="text-align: center">
            {!! $newses->render() !!}
        </div>
    </div>
@endsection