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
                            <form action="{{ route('bukutamus.destroy',$bukutamu->nomor) }}" method="Post">
                                <a class="btn btn-warning m-r-1em" href="{{ route('bukutamus.edit',$bukutamu->nomor) }}">Ubah</a>
                                @csrf
                                
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    @endauth
                </tr>
            @endforeach
        </table>
        {!! $bukutamus->links('vendor\pagination\bootstrap-5') !!}

    </div> <!-- end .container -->

@endsection