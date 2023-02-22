@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                        tambah profile

                </div>

                <div class="card-body">
                    <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <img src="{{asset('storage/images/profile/'.$profile->photo)}}" width="100px" class="img-thumbnail mb-3">
                            <input type="file" class="form-control-file"  name="photo">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{$profile->nama}}" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Nomor Induk Keluarga</label>
                            <input type="Number" class="form-control" value="{{$profile->nik}}" name="nik">
                        </div>
                        <div class="form-group">
                            <label>alamat</label>
                            <textarea name="alamat" class="form-control" cols="30" rows="10">{{$profile->alamat}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success rounded">kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection