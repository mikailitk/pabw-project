@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama_user" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="nama_user" type="text" class="form-control @error('nama_user') is-invalid @enderror" name="nama_user" value="{{ old('nama_user') }}" required autocomplete="nama_user" autofocus>

                                @error('nama_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email_user" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email_user" type="email" class="form-control @error('email_user') is-invalid @enderror" name="email_user" value="{{ old('email_user') }}" required autocomplete="email_user">

                                @error('email_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="alamat_user" class="col-md-4 col-form-label text-md-end">Alamat User</label>

                            <div class="col-md-6">
                                <input id="alamat_user" type="text" class="form-control @error('alamat_user') is-invalid @enderror" name="alamat_user" value="{{ old('alamat_user') }}" required autocomplete="alamat_user" autofocus>

                                @error('alamat_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telp_user" class="col-md-4 col-form-label text-md-end">No Telp User</label>

                            <div class="col-md-6">
                                <input id="telp_user" type="text" class="form-control @error('telp_user') is-invalid @enderror" name="telp_user" value="{{ old('telp_user') }}" required autocomplete="telp_user" autofocus>

                                @error('telp_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="role" class="col-md-4 col-form-label text-md-end">Jenis User</label>

                            <div class="col-md-6">
                                <select id="role" class="form-control @error('role') is-invalid @enderror" name="role" required autocomplete="role" autofocus>
                                    <option value="0">User Biasa</option>
                                    <option value="1">Pemilik Mitra</option>
                                </select>

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
