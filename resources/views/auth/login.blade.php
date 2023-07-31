@extends('layouts.app')
@section('title')
    Login
@endsection
@section('content')
<div class="container-xl py-4">
    <div class="h5 text-center mb-3">
        Login
    </div>
    <div class="row justify-content-center">
        <div class="col-8 col-md-6 col-xl-4">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">Username<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required autofocus>
                    @error('username')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password<span class="text-danger">*</span></label>
                    <div class="row g-2">
                        <div class="col">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                        </div>
                    </div>
                    @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-sm w-100">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
@endsection