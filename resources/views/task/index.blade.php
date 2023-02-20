@extends('template.template')

@section('title')
halaman task
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between d-flex">
                            Task
                            <a href="{{ url('task/create') }}" class="btn btn-success float-right">Buat Task</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive p-2">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Task Name</th>
                                    <th>Discription</th>
                                    <th>Actionn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($task as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>
                                        <a href="{{ url('task/'.$item->id) }}" class="btn btn-warning">Detail</a>
                                        <a href="{{ url('delete/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                        <a href="{{ url('taskedit/'.$item->id) }}" class="btn btn-danger">edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection