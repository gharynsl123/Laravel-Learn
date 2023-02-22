@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/create" class="btn btn-success">Tambakkan</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <th>Profile</th>
                                <th>Nama</th>
                                <th>NIK</th>
                            </thead>
                            <tbody>
                                @foreach($profile as $row)
                                <tr>
                                    <td>
                                        <img src="{{asset('storage/images/profile/'.$row->photo)}}" width="150px" class="img-thumbnail">
                                    </td>
                                    <td>
                                        {{$row->nama}}
                                    </td>
                                    <td>
                                        {{$row->nik}}
                                    </td>
                                    <td>
                                        <form action="#" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="{{route('profile.edit', $row->id)}}" class="btn btn-warning">ubah</a>
                                            <a type="submit" class="btn btn-danger">hapus</a>
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