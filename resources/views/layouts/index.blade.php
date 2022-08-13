@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA BLOG</div>

                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Keyword</th>
                        </tr>
                        @foreach($blog as $u)
                        <tr>
                            <td>{{$u['author']}}</td>
                            <td>{{$u['title']}}</td>
                            <td>{{$u['body']}}</td>
                            <td>{{$u['keyword']}}</td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection