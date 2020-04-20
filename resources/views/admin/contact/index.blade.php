@extends('layouts.admin')
@section('title', 'お問合せ一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>お問合せ一覧</h2>
        </div>
        <div class="row">
            
            <div class="col-md-8">
                <form action="{{ action('Admin\ContactController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">お問合せ</label>
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
            <div class="admin-contact col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="15%">名前</th>
                                <th width="20%">メールアドレス</th>
                                <th width="50%">お問い合わせ</th>
                            </tr>
                        </thead>
                                                <tbody>
                            @foreach($posts as $contact)
                                <tr>
                                    <th>{{ $contact->id }}</th>
                                    <td>{{ str_limit($contact->name, 100) }}</td>
                                    <td>{{ str_limit($contact->email, 100) }}</td>
                                    <td>{{ str_limit($contact->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ContactController@delete', ['id' => $contact->id]) }}">削除</a>
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