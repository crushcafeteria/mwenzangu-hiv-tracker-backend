@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-md-offset-1">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">List of Topics</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <button type="button" class="btn btn-sm btn-primary btn-create">Create Topic</button>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            @foreach($topics as $topic)
                                <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th>Topic</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="hidden-xs">{{$topic->id}}</td>
                                    <td>{{$topic->text}}</td>
                                    <td align="center">
                                        <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                        <a class="btn btn-warning"><em class="fa fa-pen"></em></a>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>

                    </div>
                    <div class="panel-footer">
                        <div class="col col-xs-8">
                            <ul class="pagination hidden-xs pull-right">
                                {{ $topics->links() }}
                            </ul>
                            <ul class="pagination visible-xs pull-right">
                                <li><a href="#">«</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



