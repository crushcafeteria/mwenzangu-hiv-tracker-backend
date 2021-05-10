@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-1">

                <h4 class="mb-4">New topic</h4>

                <form class="mr-3" method="POST" action="{{{ URL::to('/content') }}}" accept-charset="UTF-8">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label  class="form-label">Topics</label>
                        <select class="form-control" name="topic_id">
                            @foreach($topics as $topic)
                                <option value="{{$topic->id}}">{{$topic->name}}</option>
                            @endforeach
                        </select>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Content Type</label>
                        <select class="form-control" name="type">
                                <option value="VIDEO">VIDEO</option>
                                <option value="TEXT">TEXT</option>
                        </select>
                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" >
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Add media</label>
                            <input type="file" name="media" class="form-control-file">
                            @error('media')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Text</label>
                        <textarea class="form-control" name="text" rows="3"></textarea>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create topic</button>
                </form>
            </div>
        </div>
    </div>

@endsection
