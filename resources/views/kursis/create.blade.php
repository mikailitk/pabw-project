@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Kursi</div>
   
                <div class="card-body">
                    <form action="{{ route('kursis.store') }}" method="POST">
                        @csrf
                    
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
                                    <input type="text" name="no_kursi" class="form-control" placeholder="No Kursi">
                                </div>
                                <div class="form-group">
                                    <strong>Waktu Berangkat :</strong>
                                    <input type="datetime-local" name="waktu_berangkat" class="form-control" placeholder="Waktu berangkat">
                                </div>
                                <div class="form-group">
                                    <strong>Waktu Sampai :</strong>
                                    <input type="datetime-local" name="waktu_sampai" class="form-control" placeholder="Waktu Sampai">
                                </div>
                                <div class="form-group">
                                    <strong>Tempat Asal :</strong>
                                    <input type="text" name="tempat_asal" class="form-control" placeholder="Tempat Asal">
                                </div>
                                <div class="form-group">
                                    <strong>Tempat Tujuan :</strong>
                                    <input type="text" name="tempat_tujuan" class="form-control" placeholder="Tempat Tujuan">
                                </div>
                                <div class="form-group">
                                    <strong>Harga :</strong>
                                    <input type="text" name="harga" class="form-control" placeholder="Harga">
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