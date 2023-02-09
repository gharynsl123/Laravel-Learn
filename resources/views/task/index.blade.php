@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th>Nama</th>
                                <th>Description</th>
                                <th>Pilihan</th>
                            </thead>
                            <tbody>
                                @foreach($task as $row)

                                <tr>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->description}}</td>
                                    <td>
                                        <form action="">
                                        <a href="1" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                        </form>
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
