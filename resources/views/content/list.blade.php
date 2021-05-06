@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 blog-left">

                <h3>List of content items</h3>
                <hr>
                <div class="row">
                    @foreach($content as $item)
                        {{--@dump($item)--}}
                        <div class="col-4 mb-4">
                            <div class="card">
                                @if($item->type == 'TEXT')
                                    <img class="card-img-top" src="{{ $item->media }}">
                                @else
                                    <iframe width="100%"
                                            src="{{ $item->media }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                                    </iframe>
                                @endif
                                <div class="card-body p-2">
                                    {{--<h5 class="card-title">Card title</h5>--}}
                                    <p class="card-text text-justify">
                                        {!! Str::limit($item->text, 100)  !!}
                                    </p>

                                    <div class="text-center">
                                        <button class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-secondary">Read</a>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12">
                        {{ $content->appends(request()->all())->links() }}
                    </div>
                </div>

            </div>
            <div class="col-md-3 sidebar">
                <h3>Topics</h3>
                <hr>
                <div class="card">
                    @foreach($topics as $topic)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="{{ url('content?topic='.$topic->id) }}">{{$topic->name}}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
