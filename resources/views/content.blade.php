@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 blog-left">

                <h3>List of content items</h3>
                <hr>
                @foreach($context as $content)
                    {{--                                    <h5 class="card-title">{{$content->category}}</h5>--}}
                    <p class="card-text">{{$content->text}}</p>
                    <div class="more-link">
                        <a href="#" class="read-more-btn">ARVs</a>
                        <a href="#" class="read-more-btn">VIDEO</a>
                    </div>
                @endforeach


                <div class="col-md-12 blog-pagination">
                    {{ $context->links() }}
                </div>

            </div>
            <div class="col-md-3 sidebar">
                <h3>Topics</h3>
                <hr>
                <div class="card">
                    @foreach($topics as $topic)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$topic->name}}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
