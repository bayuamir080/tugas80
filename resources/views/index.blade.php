@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">DATA BLOG</div>

                <div class="card-body">
                    <a href="{{route('blog.tambah')}}" class="btn btn-primary">Tambah</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>NO</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Keyword</th>
                            <th>Aksi</th>


                        </tr>
                        @foreach($blog as $u)
                        <tr>

                            <td>{{$u['id']}}</td>
                            <td>{{$u['author']}}</td>
                            <td>{{$u['title']}}</td>
                            <td>{{$u['body']}}</td>
                            <td>{{$u['keyword']}}</td>


                            <td>
                                Update | Delete </td>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection