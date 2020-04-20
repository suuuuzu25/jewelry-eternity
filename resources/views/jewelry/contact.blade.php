@extends('layouts.front')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="title">
                            <p>Contact</p>
                   </div>
                <form action="{{ action('JewelryController@complete') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-4">お名前</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4">メールアドレス</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                        
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-4">お問合せ内容</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="body" rows="15">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="送信">
                </form>
            </div>
        </div>
    </div>
@endsection