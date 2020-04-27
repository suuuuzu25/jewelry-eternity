@extends('layouts.front')
@section('title','お知らせ')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="title">
                    <p>Information</p>
            </div>
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