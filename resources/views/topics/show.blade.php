@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <h4 class="mb-4">{{ $topic->name }}</h4>

                <div class="row">
                    <div class="col-8 mb-6">
                        <div class="card">
                            <img class="card-img-top" src="{{ $topic->media }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
