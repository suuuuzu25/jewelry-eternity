@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="title">
                    <h1>Works</h1>
            </div>
            <div class="work-container">
                <div class="image col-md-6 text-right mt-4">
                    @if ($post->image_path)
                        <img src="{{ asset('storage/image/' . $post->image_path) }}">
                    @endif
                </div>
                
                                <!--@foreach($posts as $work)-->
                                <!--    <tr>-->
                                <!--        <td>{{ str_limit($work->title, 100) }}</td>-->
                                <!--        <td>{{ str_limit($work->description, 250) }}</td>-->
                                        
                                <!--    </tr>-->
                                <!--@endforeach-->
                                
                
                
            </div>
        </div>
    </div>
</div>
@endsection