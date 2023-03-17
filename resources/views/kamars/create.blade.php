@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add Kamar</div>
   
                <div class="card-body">
                    <form action="{{ route('kamars.store') }}" method="POST">
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
                                    <strong>No Ruangan :</strong>
                                    <input type="text" name="no_ruangan" class="form-control" placeholder="No Ruangan">
                                </div>
                                <div class="form-group">
                                    <strong>Kapasitas Ruangan :</strong>
                                    <input type="number" name="kapasitas_ruangan" class="form-control" placeholder="Kapasitas Ruangan">
                                </div>
                                <div class="form-group">
                                    <strong>Tipe Ruangan :</strong>
                                    <select name="tipe_ruangan" class="form-control">
                                        <option value="" selected disabled>Pilih Tipe Ruangan</option>
                                        <option value="Room">Room</option>
                                        <option value="Suite">Suite</option>
                                    </select>
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
