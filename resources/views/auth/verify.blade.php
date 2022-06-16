@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Alamat Emailmu') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi yang baru telah dikirim ke alamat emailmu..') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, tolong cek emailmu untuk tautan verifikasi.') }}
                    {{ __('Jika Anda tidak mendapatkan email verifikasi') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik disini untuk meminta') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
