@extends('layouts.master')
@section('content')
<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Kode Obat</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Jenis Obat</th>
                    <th scope="col">Dosis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($obat as $obt)
                    <tr>
                        <td>{{ $obt->kode_obat }}</td>
                        <td>{{ $obt->nama_obat }}</td>
                        <td>{{ $obt->jenis_obat}}</td>
                        <td>{{ $obt->dosis }}</td>
                        <td>{{ $obt->harga }}</td>
                  
                        
                        <td>
                            <a href="{{route('obat.edit', $obt->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('obat.destroy', $obt->id)}}" class="btn btn-danger">Hapus</a>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-GLhlTQ8iKJE9z8iz3ofnDqmG9PBjMe/ZI3q23FqNfEXZB+q2jRXmiD4E5J2ERqD" crossorigin="anonymous"></script>
</body>
</html>
@endsection