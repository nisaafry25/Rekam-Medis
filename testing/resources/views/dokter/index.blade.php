
@extends('layouts.master')
@section('content')
<body>

<div class="container mb-3">
    <h1>Form Dokter</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">kode dokter</th>
                <th scope="col">Nama dokter</th>
                <th scope="col">Spesialis</th>
                <th scope="col">Poli</th>
                <th scope="col">Opsi</th>
        
            </tr>
        </thead>
        <tbody>
            @foreach ($dokter as $dr)
            <tr>
                <td>{{ $dr->kode_dokter}}</td>
                <td>{{ $dr->nama_dokter}}</td>
                <td>{{ $dr->spesialis}}</td>
                <td>{{ $dr->poli}}</td>
            <td>

            <a href="{{ route('dokter.edit', $dr->id) }}" class="btn btn-primary"> Edit</a>
            <a href="{{ route('dokter.destroy', $dr->id) }}" class="btn btn-danger"> Hapus</a>
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

