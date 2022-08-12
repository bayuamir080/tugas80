@extends('layouts.app')

@section('oke')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA BLOG</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Keyword</th>
                        </tr>
                        @foreach($data_blogs as $item)
                        <tr>
                            <td>{{$item['author']}}</td>
                            <td>{{$item['title']}}</td>
                            <td>{{$item['body']}}</td>
                            <td>{{$item['keyword']}}</td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection