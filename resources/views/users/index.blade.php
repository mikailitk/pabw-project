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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
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
                            <a class="btn btn-info" href="{{ route('users.wallet', $u->id) }}">Wallet</a>
                                <!-- <form action="{{ route('users.destroy', $u->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('users.show',$u->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('users.edit',$u->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> -->
                            </td>
                        </tr>
                        @endforeach
                    </table>
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
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
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
                            <a class="btn btn-info" href="{{ route('users.wallet', $u->id) }}">Wallet</a>
                                <!-- <form action="{{ route('users.destroy', $u->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('users.show',$u->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('users.edit',$u->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> -->
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection