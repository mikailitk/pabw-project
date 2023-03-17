@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kursi Pesawat Settings</div>
   
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>No Kursir</th>
                            <th>Waktu Berangkat</th>
                            <th>Waktu Sampai</th>
                            <th>Tempat Asal</th>
                            <th>Tempat Tujuan</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($kursis as $ku) 
                        <tr>
                            <td>{{ $ku->id_produk }}</td>
                            <td>{{ $ku->fromkursi->no_kursi }}</td>
                            <td>{{ $ku->fromkursi->waktu_berangkat }}</td>
                            <td>{{ $ku->fromkursi->waktu_sampai }}</td>
                            <td>{{ $ku->fromkursi->tempat_asal }}</td>
                            <td>{{ $ku->fromkursi->tempat_tujuan }}</td>
                            <td>
                                <form action="{{ route('kursis.destroy', $ku->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('kursis.edit',$ku->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('kursis.create') }}">New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Kamar Hotel Settings</div>
   
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>No Ruangan</th>
                            <th>Kapasitas Ruangan</th>
                            <th>Tipe Ruangan</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($kamars as $ka) 
                        <tr>
                            <td>{{ $ka->id_produk }}</td>
                            <td>{{ $ka->fromkamar->no_ruangan ?? ''}}</td>
                            <td>{{ $ka->fromkamar->kapasitas_ruangan ?? ''}}</td>
                            <td>{{ $ka->fromkamar->tipe_ruangan ?? ''}}</td>
                            <td>
                                <form action="{{ route('kamars.destroy', $ka->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('kamars.edit', $ka->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('kamars.create') }}">New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection