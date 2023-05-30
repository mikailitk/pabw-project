@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit MItra</div>
   
                <div class="card-body">
                    <form action="{{ route('mitras.update', $mitras->id) }}" method="POST">
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
                                    <strong>Nama Mitra :</strong>
                                    <input type="text" name="nama_mitra" class="form-control" placeholder="Nama Mitra" value="{{ $mitras->nama_mitra }}">
                                </div>
                                <div class="form-group">
                                    <strong>Nama Brand :</strong>
                                    <input type="text" name="nama_brand" class="form-control" placeholder="Nama Brand" value="{{ $mitras->nama_brand }}">
                                </div>
                                <div class="form-group">
                                    <strong>Pemilik :</strong>
                                    <select name="jenis_mitra" class="form-control">
                                        <option value="Penerbangan" {{ $mitras->jenis_mitra == "Penerbangan" ? 'selected' : '' }}>Penerbangan</option>
                                        <option value="Perhotelan" {{ $mitras->jenis_mitra == "Perhotelan" ? 'selected' : '' }}>Perhotelan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <strong>Email Mitra :</strong>
                                    <input type="email" name="email_mitra" class="form-control" placeholder="Email Mitra" value="{{ $mitras->email_mitra }}">
                                </div>
                                <div class="form-group">
                                    <strong>Alamat Mitra :</strong>
                                    <input type="text" name="alamat_mitra" class="form-control" placeholder="Alamat Mitra" value="{{ $mitras->alamat_mitra }}">
                                </div>
                                <div class="form-group">
                                    <strong>No Telp Mitra :</strong>
                                    <input type="text" name="telp_mitra" class="form-control" placeholder="No Telp Mitra" value="{{ $mitras->telp_mitra }}">
                                </div>
                                <div class="form-group">
                                    <strong>Pemilik :</strong>
                                    <select name="id_user" class="form-control">
                                        <option selected><-- Select User --></option>
                                        @foreach ($users as $u)
                                        <option value="{{ $u->id }}">{{ $u->nama_user }}</option>
                                        @endforeach
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