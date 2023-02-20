@extends('template.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Task</div>
                <div class="card-body">
                    <form action="{{url('taskupdate', $task->id)}}" method="post">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group mt-2">
                            <label class="form-label">Nama Task</label>
                            <input type="text" name="nama" value="{{$task->nama}}" class="form-control" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                        <div class="form-group mt-2 mb-2">
                            <label class="form-label">Description</label>
                            <input type="text" name="description" value="{{$task->description}}" class="form-control" onfocus="focused(this)"
                                onfocusout="defocused(this)">
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