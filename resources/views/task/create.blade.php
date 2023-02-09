@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task</div>
                <div class="card-body">
                    <form action="/savetask" method="post">
                        @csrf
                        <div class="form-group">
                            <lable>Nama task</lable>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <lable>Description task</lable>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Buat</button>
                            <a href="/task" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
