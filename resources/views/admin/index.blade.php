@extends('layouts.admin')
@section('title', '管理者用トップページ')

@section('content')
    <div class="container">
        <div class="row">
            <h2>リンク一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <ul class="inner">
                    <li><a href="admin/information">お知らせ一覧</a></li>
                    <li><a href="admin/information/create">新規お知らせ作成</a></li>
                    <li><a href="admin/work">作品一覧</a></li>
                    <li><a href="admin/work/create">新規作品追加</a></li>
                    <li><a href="/">ホームページへ</a></li>
                </ul>
                
@endsection