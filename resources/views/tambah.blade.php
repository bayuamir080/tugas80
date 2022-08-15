@extends('layouts.app')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAH DATA</div>

                <div class="card-body">
                    <form method="POST" action="{{route('blog.store')}}">
                        @csrf
                        @method('PUT')
                        <legend>
                            <div class="form-group">
                                <input type="text" name="author" class="form-control" id="" placeholder="Author">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" id="" placeholder="Title">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="body" class="form-control" id="" placeholder="Body">
                            </div>
                        </legend>
                        <legend>
                            <div class="form-group">
                                <input type="text" name="keyword" class="form-control" id="" placeholder="Keyword">
                            </div>
                        </legend>
                        <legend>
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
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