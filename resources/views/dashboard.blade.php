@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card mb-3 mr-3" style="width: 16rem; ">
                <a href="{{ route('content.create') }}" class="btn"><i class="fa fa-plus-circle fa-6x" style="color: black" ></i>
                   <h4 class="card-body" style="color: black">Add Content</h4>
                </a>
            </div>
            <div class="card  mb-3 mr-3" style="width: 16rem;">
                <a href="{{ URL::to('/content') }}" class="btn"><i class="fa fa-camera fa-6x" style="color: black"></i>
                    <h4 class="card-body" style="color: black">Available Content</h4>
                </a>
            </div>
            <div class="card mb-3 mr-3" style="width: 16rem;">
                <a href="{{ route('topics.create') }}" class="btn"><i class="fa fa-plus-circle fa-6x" style="color: black"></i>
                    <h4 class="card-body" style="color: black">Add Topic</h4>
                </a>
            </div>
            <div class="card mb-3 mr-3" style="width: 16rem;">
                <a href="{{ route('topics.index') }}" class="btn"><i class="fa fa-book fa-6x" style="color: black"></i>
                    <h4 class="card-body" style="color: black">Available Topics</h4>
                </a>
            </div>
        </div>
@endsection
