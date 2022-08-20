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
                            <th>ID</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Keyword</th>
                            <th>Aksi</th>


                        </tr>
                        @php $no=0; @endphp
                        @foreach($blog as $u)
                        @php $no++; @endphp
                        <tr>


                            <td>{{$no}}</td>
                            <td>{{$u['author']}}</td>
                            <td>{{$u['title']}}</td>
                            <td>{{$u['body']}}</td>
                            <td>{{$u['keyword']}}</td>


                            <td>
                                <a href="{{route('blog.edit',$u['id'])}}" class="btn btn-primary">EDIT</a>
                                <a href="{{route('blog.hapus',$u['id'])}}" class="btn btn-primary">HAPUS</a>
                        </tr>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection