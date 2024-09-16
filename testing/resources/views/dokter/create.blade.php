@extends('layouts.master')
@section('content')
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


    <div class="container mb-3">
        <h1>Form Dokter</h1>
        <a href="{{ route('dokter.index') }}" class="btn btn-primary">Tampilkan Data</a>
        <form action="{{ route('dokter') }}" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="kode_dokter">Kode Dokter</label>
                <input type="number" class="form-control @error('kode_dokter')
                    is-invalid
                @enderror" value="{{ old('kode_dokter') }}" name="kode_dokter">
                @error('kode_dokter')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="nama_doktera">Nama Dokter</label>
                <input type="text" class="form-control @error('nama_dokter')
                    is-invalid
                @enderror" value="{{ old('nama_dokter') }}" name="nama_dokter">
                @error('nama_dokter')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
            <label for="poli">Spesialis</label>
            <select class="form-control @error('spesialis') is-invalid @enderror" name="spesialis">
                <option value="" selected disabled>Pilih Spesialis</option>
                <option value="umum" {{ old('spesialis') == 'umum' ? 'selected' : '' }}>Umum</option>
                <option value="jantung" {{ old('spesialis') == 'jantung' ? 'selected' : '' }}>Jantung</option>
                <option value="mata" {{ old('spesialis') == 'mata' ? 'selected' : '' }}>Mata</option>
                <option value="kulit" {{ old('spesialis') == 'kulit' ? 'selected' : '' }}>Kulit</option>
                <option value="gigi" {{ old('spesialis') == 'gigi' ? 'selected' : '' }}>Gigi</option>
                <option value="tht" {{ old('spesialis') == 'tht' ? 'selected' : '' }}>THT</option>
                <option value="penyakit_dalam" {{ old('spesialis') == 'penyakit_dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
                <option value="anak" {{ old('spesialis') == 'anak' ? 'selected' : '' }}>Anak</option>
                <option value="saraf" {{ old('spesialis') == 'saraf' ? 'selected' : '' }}>Saraf</option>
                <option value="bedah" {{ old('spesialis') == 'bedah' ? 'selected' : '' }}>Bedah</option>
            </select>
            @error('spesialis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
            <div class="form-group mb-2">
            <label for="poli">Poli</label>
            <select class="form-control @error('poli') is-invalid @enderror" name="poli">
                <option value="" selected disabled>Pilih Poli</option>
                <option value="anak" {{ old('poli') == 'anak' ? 'selected' : '' }}>Anak</option>
                <option value="bedah" {{ old('poli') == 'bedah' ? 'selected' : '' }}>Bedah</option>
                <option value="mata" {{ old('poli') == 'mata' ? 'selected' : '' }}>Mata</option>
                <option value="umum" {{ old('poli') == 'umum' ? 'selected' : '' }}>Umum</option>
                <option value="saraf" {{ old('poli') == 'saraf' ? 'selected' : '' }}>Saraf</option>
                <option value="tht" {{ old('poli') == 'tht' ? 'selected' : '' }}>THT</option>
                <option value="gigi" {{ old('poli') == 'gigi' ? 'selected' : '' }}>Gigi</option>
                <option value="kulit" {{ old('poli') == 'kulit' ? 'selected' : '' }}>Kulit</option>
                <option value="penyakit_dalam" {{ old('poli') == 'penyakit_dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
                <option value="kandungan" {{ old('poli') == 'kandungan' ? 'selected' : '' }}>Kandungan</option>
            </select>
            @error('poli')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-success" type="submit">simpan</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
@endsection