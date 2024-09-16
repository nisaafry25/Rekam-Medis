@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body>
    <div class="container mb-3">
        <h1>Form Input Data Pasien</h1>
        <a href="{{ route('pasien.index') }}" class="btn btn-primary">Tampilkan Data</a>
        <form action="{{ route('pasien') }}" method="post">
            @csrf

            <div class="form-group mb-2">
                <label for="kode_pasien">Kode Pasien</label>
                <input type="number"
                    class="form-control @error('kode_pasien') is-invalid @enderror"
                    value="{{ old('kode_pasien') }}" name="kode_pasien">
                @error('kode_pasien')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text"
                    class="form-control @error('nama_pasien') is-invalid @enderror"
                    value="{{ old('nama_pasien') }}" name="nama_pasien">
                @error('nama_pasien')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="umur">Umur</label>
                <input type="number"
                    class="form-control @error('umur') is-invalid @enderror"
                    value="{{ old('umur') }}" name="umur">
                @error('umur')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                        value="Laki-laki" checked>
                    <label class="form-check-label" for="laki_laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                        value="Perempuan">
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
                @error('jenis_kelamin')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date"
                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                    value="{{ old('tanggal_lahir') }}" name="tanggal_lahir">
                @error('tanggal_lahir')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="alamat">Alamat</label>
                <input type="text"
                    class="form-control @error('alamat') is-invalid @enderror"
                    value="{{ old('alamat') }}" name="alamat">
                @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="keluhan">Keluhan</label>
                <input type="text"
                    class="form-control @error('keluhan') is-invalid @enderror"
                    value="{{ old('keluhan') }}" name="keluhan">
                @error('keluhan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="diagnosa">Diagnosa</label>
                <input type="text"
                    class="form-control @error('diagnosa') is-invalid @enderror"
                    value="{{ old('diagnosa') }}" name="diagnosa">
                @error('diagnosa')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection
