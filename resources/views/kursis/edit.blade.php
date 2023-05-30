@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Kursi</div>
   
                <div class="card-body">
                    <form action="{{ route('pemesanans.update', $p_kursi->id) }}" method="POST">
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
                                    <strong>No Kursi :</strong>
                                    <input type="text" name="no_kursi" class="form-control" placeholder="No Kursi" value="{{ $p_kursi->no_kursi }}">
                                </div>
                                <div class="form-group">
                                    <strong>Waktu Berangkat :</strong>
                                    <input type="text" name="waktu_berangkat" class="form-control" placeholder="Waktu Berangkat" value="{{ $p_kursi->waktu_berangkat }}">
                                </div>
                                <div class="form-group">
                                    <strong>Waktu Sampai :</strong>
                                    <input type="email" name="waktu_sampai" class="form-control" placeholder="Waktu Sampai" value="{{ $p_kursi->waktu_sampai }}">
                                </div>
                                <div class="form-group">
                                    <strong>Tempat Asal :</strong>
                                    <input type="text" name="id_tempat_asal" class="form-control" placeholder="Tempat Asal" value="{{ $p_kursi->tempat_asal }}">
                                </div>
                                <div class="form-group">
                                    <strong>Tempat Tujuan :</strong>
                                    <input type="text" name="id_" class="form-control" placeholder="Tempat Tujuan" value="{{ $p_kursi->tempat_tujuan }}">
                                </div>
                                <div class="form-group">
                                    <strong>Harga :</strong>
                                    <input type="number" name="harga" class="form-control" placeholder="Harga" value="{{ $p_kursi->harga }}">
                                </div>
                                <div class="form-group">
                                    <strong>Status :</strong>
                                    <select name="status" class="form-control">
                                        @if ($p_kursi->status == "Tersedia")
                                        <option value="Tersedia" selected>Tersedia</option>
                                        <option value="Tidak Tersedia">TIdak Tersedia</option>
                                        @else
                                        <option value="Tidak Tersedia" selected>Tidak Tersedia</option>
                                        <option value="Tersedia">Tersedia</option>
                                        @endif
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