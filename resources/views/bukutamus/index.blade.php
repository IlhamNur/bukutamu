    @extends('layouts.app')

    @section('content')

    <!-- container -->
    <div class="container">

        @auth
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif

            <a class="btn btn-primary m-b-1em" href="{{ route('bukutamus.create') }}">Masukkan Data Tamu Baru</a>
        @endauth

        <table class="table table-hover table-responsive table-bordered">
            
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Foto</th>
                <th>Kategori</th>
                <th>Email</th>
                <th>Waktu</th>
                <th>Komentar</th>
                @auth
                <th>Aksi</th>
                @endauth
            </tr>

            @foreach ($bukutamus as $key => $bukutamu)
                <tr>
                    <th scope="row">{{ $bukutamus->firstItem() + $key }}</th>
                    <td>{{ $bukutamu->nama }}</td>
                    <td>
                        @if ($bukutamu->foto)
                            <img src="{{Storage::url($bukutamu->foto)}}" alt="foto" style="width: 200px; height:auto;">
                        @endif
                      </td>
                    <td>
                        @foreach ($bukutamu->tamuKategoris as $tamuKategori) 
                            {{ $tamuKategori->Kategori->nama }}<br>
                        @endforeach
                    </td>
                    <td>{{ $bukutamu->email }}</td>
                    <td>{{ $bukutamu->waktu }}</td>
                    <td>{{ $bukutamu->komentar }}</td>

                    @auth
                        <td>
                            <a class="btn btn-warning m-r-1em" href="{{ route('bukutamus.edit',$bukutamu->nomor) }}">Ubah</a>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal{{$bukutamu->nomor}}" class="btn btn-danger">Hapus</button>
                            
                            <div class="modal fade" id="deleteModal{{$bukutamu->nomor}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Tamu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="{{ route('bukutamus.destroy',$bukutamu->nomor) }}">
                                            @csrf

                                            @method('DELETE')
                                            <div class="modal-body" style="height:100px; display:flex; align-items:center; justify-content:center;">
                                                <h5 class="text-center">Apakah anda yakin ingin menghapus data tamu ini?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kembali</button>
                                                <button type="submit" class="btn btn-danger">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    @endauth
                </tr>
            @endforeach
        </table>
        {!! $bukutamus->links('vendor\pagination\bootstrap-5') !!}

    </div> <!-- end .container -->

@endsection