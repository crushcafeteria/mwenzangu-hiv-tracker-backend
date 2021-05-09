@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-md-offset-1">

                <h4 class="mb-4">{{ $topic->name }} : {{$content->title}}</h4>
                <hr>

                <div class="col-12 mb-4">
                    <div class="card">
                        @if($content->type == 'TEXT')
                            <img class="card-img-top" src="{{ $content->media }}">
                        @else
                            <iframe width="100%"
                                    src="{{ $content->media }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                            </iframe>
                        @endif
                        <div class="card-body p-2 white-space: pre-wrap">
                            <p class="card-text text-justify">
                                {{$content->text}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
