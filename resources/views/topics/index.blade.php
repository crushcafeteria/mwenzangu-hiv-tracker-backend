@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-md-offset-1">

                <a href="{{ route('topics.create') }}" type="button" class="btn btn-success ml-auto float-right">
                    Create Topic
                </a>
                <h3 class="mb-4">List of Topics</h3>

                <table class="table table-bordered table-sm">
                    @foreach($topics as $topic)
                        <tr>
                            <td class="pl-3">{{$topic->name}}</td>
                            <td>
                                <a href="{{ route('topics.destroy', ['topic' => $topic->id]) }}"
                                   class="btn btn-outline-danger btn-sm float-right">Delete</a>
                                <a href="{{ route('topics.edit', ['topic' => $topic->id]) }}"
                                   class="btn btn-outline-primary btn-sm float-right mr-2">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>

                <div>
                    {{ $topics->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection



