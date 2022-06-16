@extends('layouts.app')

@section('content')

@auth
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Masukkan Data Tamu</h1>
        </div>

        @php
            date_default_timezone_set("Asia/Jakarta");
        @endphp

        <form action="{{ route('bukutamus.store') }}" method="POST">
            @csrf
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Nama</td>
                    <td><input type='text' name='nama' class='form-control' /></td>
                </tr>
                @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Kategori</td>
                    <td>
                        @foreach ($kategoris as $kategori) 
                            <input type="checkbox" id="{{$kategori->nama}}" name="kategori[]" value="{{$kategori->nomor}}" class="btn-check">
                            <label for="{{$kategori->nama}}"> {{$kategori->nama}}</label><br>
                        @endforeach
                    </td>
                </tr>
                @error('kategori')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' class='form-control'/></td>
                </tr>
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Waktu</td>
                    <td><input type='datetime' name='waktu' class='form-control' value="{{ date('Y-m-d H:i:s') }}"/></td>
                </tr>
                @error('waktu')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Komentar</td>
                    <td><textarea name='komentar' class='form-control'></textarea></td>
                </tr>
                @error('komentar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Simpan' class='btn btn-primary' />
                        <a href="{{ route('bukutamus.index') }}" class='btn btn-danger'>Kembali ke Buku Tamu</a>
                    </td>
                </tr>
            </table>
        </form>
    
    </div> <!-- end .container -->
@endauth
@endsection