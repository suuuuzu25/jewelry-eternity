@extends('layouts.front')
@section('css')
<link href="css/jewelry/information.css" rel="stylesheet">
@endsection
@section('title','お知らせ')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class = title>お知らせ</div>
            <div class="information-container">
                <table class="table table-white">
                    <tbody>
                                @foreach($posts as $information)
                                    <tr>
                                        <td>{{ str_limit($information->date, 100) }}</td>
                                        <td>{{ str_limit($information->body, 250) }}</td>
                                        
                                    </tr>
                                @endforeach
                    </tbody>
                </table>
                
                
            </div>
        </div>
    </div>
</div>
@endsection