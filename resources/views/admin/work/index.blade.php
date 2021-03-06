@extends('layouts.admin')
@section('title', '登録済みの作品一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>作品一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\WorkController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\WorkController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_body" value={{ $cond_body }}>
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="admin-work col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">説明文</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                                                <tbody>
                            @foreach($posts as $work)
                                <tr>
                                    <th>{{ $work->id }}</th>
                                    <td>{{ str_limit($work->title,100) }}</td>
                                    <td>{{ str_limit($work->description, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\WorkController@edit', ['id' => $work->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\WorkController@delete', ['id' => $work->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection