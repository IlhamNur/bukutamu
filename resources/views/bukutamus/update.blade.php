@extends('layouts.app')

@section('content')

@auth
    <!-- container -->
    <div class="container">
 
        <div class="page-header">
            <h1>Ubah Data Tamu</h1>
        </div>

        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form action="{{ route('bukutamus.update',$bukutamu->nomor) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Nama</td>
                    <td><input type='text' name='nama' value="{{ $bukutamu->nama }}" class='form-control' /></td>
                </tr>
                @error('nama')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Foto</td>
                    <td><input type='file' name='foto' class='form-control' /></td>
                </tr>
                @error('foto')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Kategori</td>
                    <td>
                        @foreach ($kategoris as $kategori) 
                            <input type="checkbox" id="{{$kategori->nama}}" name="kategori[]" value="{{$kategori->nomor}}" {{$bukutamu->hasKategoriByNomor($kategori->nomor) ? 'checked' : ''}}>
                            <label for="{{$kategori->nama}}"> {{$kategori->nama}}</label><br>
                        @endforeach
                    </td>
                </tr>
                @error('kategori')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Email</td>
                    <td><input type='email' name='email' value="{{ $bukutamu->email }}" class='form-control'></input></td>
                </tr>
                @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td>Komentar</td>
                    <td><textarea name='komentar' class='form-control'>{{ $bukutamu->komentar }}</textarea></td>
                </tr>
                @error('komentar')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                <tr>
                    <td></td>
                    <td>
                        <input type='submit' value='Simpan Perubahan' class='btn btn-primary' />
                        <a href="{{ route('bukutamus.index') }}" class='btn btn-danger'>Kembali ke Buku Tamu</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

@endauth
@endsection