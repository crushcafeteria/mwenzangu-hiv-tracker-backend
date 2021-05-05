@extends('layouts.app')
@section('content')
    <div class="blog-wrap">
        <div class="container">
            <h3>List of Content Items</h3>
            <div class="row">
                <div class="col-md-9 blog-left">
                    <article class="blog-post">
                        @foreach($context as $content)
                            <div class="card">
                                <div class="card-body">
                                    {{--                                    <h5 class="card-title">{{$content->category}}</h5>--}}
                                    <p class="card-text">{{$content->text}}</p>
                                    <div class="more-link">
                                        <a href="#" class="read-more-btn">ARVs</a>
                                        <a href="#" class="read-more-btn">VIDEO</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </article>
                    <div class="col-md-12 blog-pagination">
                        {{ $context->links() }}
                    </div>

                </div>
                <div class="col-md-3 sidebar">
                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h3>Filter by Topics</h3>
                        </div>
                        @foreach($topics as $topic)
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$topic->text}}</li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    <div class="blog-pagination">
                        {{ $topics->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



