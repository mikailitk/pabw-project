@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Users Settings</div>
   
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama User</th>
                            <th>Email User</th>
                            <th>Jenis User</th>
                            <th>Wallet</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($users as $u) 
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->nama_user }}</td>
                            <td>{{ $u->email_user }}</td>
                            <td>{{ $u->role == 0 ? 'Pengguna Biasa' : 'Pemilik Mitra' }}</td>
                            <td>{{ $u->wallet }}</td>
                            <td>
                                <form action="{{ route('users.destroy', $u->id) }}" method="POST">
                                    <!-- <a class="btn btn-info" href="{{ route('users.show',$u->id) }}">Show</a> -->
                                    <a class="btn btn-info" href="{{ route('users.wallet', $u->id) }}">Wallet</a>
                                    <a class="btn btn-primary" href="{{ route('users.edit',$u->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('users.create') }}">New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mitra Settings</div>
   
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <th>Nama Mitra</th>
                            <th>Nama Brand</th>
                            <th>Pemilik</th>
                            <th>Alamat Mitra</th>
                            <th>Email Mitra</th>
                            <th>No Telp Mitra</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($mitras as $m) 
                        <tr>
                            <td>{{ $m->id }}</td>
                            <td>{{ $m->nama_mitra }}</td>
                            <td>{{ $m->nama_brand }}</td>
                            <td>{{ $m->owner->nama_user }}</td>
                            <td>{{ $m->alamat_mitra }}</td>
                            <td>{{ $m->email_mitra }}</td>
                            <td>{{ $m->telp_mitra }}</td>
                            <td>
                                <form action="{{ route('mitras.destroy', $m->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('mitras.edit', $m->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('mitras.create') }}">New</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection