
@extends('layouts.master')
@section('content')
<body>

<div class="container mb-3">
    <h1>Form Input Data Pasien</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">umur</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Keluhan</th>
                <th scope="col">Diagnosa</th>
                <th scope="col">Nama Dokter</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasien as $pasn)
            <tr>
                <td>1</td>
                <td>{{ $pasn->nama_pasien}}</td>
                <td>{{ $pasn->umur}}</td>
                <td>{{ $pasn->jenis_kelamin}}</td>
                <td>{{ $pasn->tanggal_lahir}}</td>
                <td>{{ $pasn->alamat}}</td>
                <td>{{ $pasn->keluhan}}</td>
                <td>{{ $pasn->diagnosa}}</td>
                
            <td>    
                @foreach ($pasn->dokter as $item)
                    -{{$item->nama_dokter}} <br>
                @endforeach
</td>
            <td>   
            <a href="{{ route('pasien.edit', $pasn->id) }}" class="btn btn-primary"> Edit</a>
            <a href="{{ route('pasien.destroy', $pasn->id) }}" class="btn btn-danger"> Hapus</a>
            </td>
        </tr>
        @endforeach
 </tbody>
    </table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootdtrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C5RzsynM9kwDrMNeT87bh95OGNyZPhcTNXj1Nw7RuBCsyn/o0j1pcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>


@endsection

