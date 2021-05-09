@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-1">

                <h4 class="mb-4">New topic</h4>

                    <form method="POST" action="{{{ URL::to('topics/'.$topic->id) }}}" accept-charset="UTF-8" >
                        @method('PUT')
                        {{ csrf_field() }}

                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $topic->name}}" >
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="form-label">Add media</label>
                            <input type="file" name="media" value="{{ $topic->media}}" class="form-control-file">
                            @error('media')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update topic</button>
                </form>
            </div>
        </div>
    </div>

@endsection
