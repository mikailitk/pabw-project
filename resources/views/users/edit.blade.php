@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit User</div>
   
                <div class="card-body">
                    <form action="{{ route('users.update', $users->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama User :</strong>
                                    <input type="text" name="nama_user" class="form-control" placeholder="Nama User" value="{{ $users->nama_user }}">
                                </div>
                                <div class="form-group">
                                    <strong>Email User :</strong>
                                    <input type="email" name="email_user" class="form-control" placeholder="Email User" value="{{ $users->email_user }}">
                                </div>
                                <div class="form-group">
                                    <strong>Alamat User :</strong>
                                    <input type="text" name="alamat_user" class="form-control" placeholder="Alamat User" value="{{ $users->alamat_user }}">
                                </div>
                                <div class="form-group">
                                    <strong>No Telp User :</strong>
                                    <input type="text" name="telp_user" class="form-control" placeholder="No Telp User" value="{{ $users->telp_user }}">
                                </div>
                                <div class="form-group">
                                    <strong>Jenis User :</strong>
                                    <select name="role" class="form-control">
                                        <option selected><-- Select User --></option>
                                        <option value="0">User Biasa</option>
                                        <option value="1">Pemilik Mitra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection