@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-1">

                <h4 class="mb-4">New topic</h4>

                <div class="row">
                    <div class="col-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ $topic->media }}">
                            <div class="card-body p-2">
                                <p class="card-text text-justify">
                                    {{ $topic->name }}
                                </p>

                            </div>
                            <div class="text-center">
                            </div>
                        </div>
                        <button class="btn-group btn-group-sm">
                            <a href="#" class="btn btn-danger btn-sm">Delete Topic</a>
                        </button>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete this sales lead ?')">Delete topic</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
