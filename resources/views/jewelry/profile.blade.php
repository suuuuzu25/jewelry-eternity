@extends('layouts.front')
@section('css')
<link href="css/jewelry/profile.css" rel="stylesheet">
@endsection
@section('title','プロフィール')
@section('content')
<div class="container">
        <div class="col-md-10 mx-auto">
            <div class="title">
                    <p>プロフィール</p>
            </div>
            <div class="profile-container">
                
                <div class="profile-img">
                    <img src="img/IMG_8630.JPG" width="400" height="400">
                </div>
                <div class="columm">
                    <div class="profile-title">
                        <p class="small">ジュエリーデザイナー</p>
                        <p>高橋　美涼　<span style="font-size:15px;">(たかはし みすず)</span></p>
                    </div>
                    <div class="profile-text">
                        <p>大手小売店のチーフデザイナーを経て、1996年独立。</p>
                        <p>国内有名ブランドのOEM商品の開発に携わる。</p>
                        <p>現在はフルオーダー、リモデルを中心に活動中。</p>
                        <p　class="mb-30">2004年より、日本宝飾クラフト学院　デザイン講師。</p>
                        <p>◆ ジュエリーリモデルカウンセラー1級</p>
                        <p　class="mb-30">◆ 宝石品質判定士</p>
                        <ui>▷受賞歴
                            <li class ="profile-list">JJAジュエリーデザインアワード2010　第3部門　入選</li>
                            <li class ="profile-list">スワロフスキー ジェムズ スタイルマックスジャパンコンテスト2011 グランプリ</li>
                        </ui>
                    </div>
                </div>
            </div>
        </div>
    <div class="sns_box">
        <div class="sns_button twitter">
            <a href="https://twitter.com/takahashimisuzu" title="Tweet"><img src="img\social-003_twitter.png"></a>
        </div>
        <div class="sns_button facebook">
            <a href="https://ja-jp.facebook.com/misuzu.takahashi" title="Facebook"><img src="img\social-006_facebook.png"></a>
        </div>
        <div class="sns_button instagram">
            <a href="https://instagram.com/pearl_white.snow_white?igshid=1ktmrvo4tdexf" title="Instagram"><img src="img\social-038_instagram.png"></a>
        </div>
    </div>
</div>
@endsection