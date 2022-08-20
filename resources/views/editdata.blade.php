@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA</div>

                <div class="card-body">
                    <form method="POST" action="{{route('blog.update',$data['id'])}}">
                        @csrf
                        @method('PUT')
                        <legend>
                            <div class="form-group">
                                <input type="text" name="author" value="{{$data['author']}}" class="form-control" id="" placeholder="Author">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="title" value="{{$data['title']}}" class="form-control" id="" placeholder="Title">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="body" value="{{$data['body']}}" class="form-control" id="" placeholder="Body">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="keyword" value="{{$data['keyword']}}" class="form-control" id="" placeholder="Keyword">
                            </div>
                        </legend>
                        <legend>
                            <div>
                                <button type="submit" class="btn btn-primary">EDIT</button>
                            </div>
                        </legend>
                    </form>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection