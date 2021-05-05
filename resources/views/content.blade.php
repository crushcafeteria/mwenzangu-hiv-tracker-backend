@extends('layouts.app')
@section('content')
    <div class="section" id="b-section-header" name="Header"><div class="widget Header" data-version="2" id="Header1">
            <div class="header image-placement-behind no-image">
                <div class="container">
                    <h1><a href="">This is the header Image</a></h1>
                    <p>Content Topic</p>
                </div>
            </div>
        </div></div>
    <section class="details-card">
        <div class="container">
            <div class="row">
                @foreach($context as $content)
                    <div class="col-md-4">
                        <div class="card-content">
                            <div class="card-img">
                                <img src="https://placeimg.com/380/230/nature" alt="">
                            </div>
                            <div class="card-desc">
                                <h3>{{ $content->topic }}</h3>
                                <p>{{ $content->text }}</p>
                                <a href="{{url('content/'.$content->id)}}" class="btn-card">More </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
@endsection



