<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container mb-3">
    <h1>Form Dokter</h1>
    <form action="{{ route('dokter.update', $dokter->id) }}" method="post">
        @csrf

        <div class="form-group mb-2">
            <label for="kode_dokter">Kode dokter</label>
            <input type="number" class="form-control @error('kode_dokter') is-invalid @enderror" value="{{ old('kode_dokter', $dokter->kode_dokter) }}" name="kode_dokter">
            @error('kode_dokter')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <label for="nama_dokter">Nama Dokter</label>
            <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" value="{{ old('nama_dokter', $dokter->nama_dokter) }}" name="nama_dokter">
            @error('nama_dokter')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

         <div class="form-group mb-2">
        <label for="spesialis">Spesialis</label>
        <select class="form-control @error('spesialis') is-invalid @enderror" name="spesialis">
            <option value="" selected disabled>Pilih Spesialis</option>
            <option value="umum" {{ old('spesialis', $dokter->spesialis) == 'umum' ? 'selected' : '' }}>Umum</option>
            <option value="jantung" {{ old('spesialis', $dokter->spesialis) == 'jantung' ? 'selected' : '' }}>Jantung</option>
            <option value="mata" {{ old('spesialis', $dokter->spesialis) == 'mata' ? 'selected' : '' }}>Mata</option>
            <option value="kulit" {{ old('spesialis', $dokter->spesialis) == 'kulit' ? 'selected' : '' }}>Kulit</option>
            <option value="gigi" {{ old('spesialis', $dokter->spesialis) == 'gigi' ? 'selected' : '' }}>Gigi</option>
            <option value="tht" {{ old('spesialis', $dokter->spesialis) == 'tht' ? 'selected' : '' }}>THT</option>
            <option value="penyakit_dalam" {{ old('spesialis', $dokter->spesialis) == 'penyakit_dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
            <option value="anak" {{ old('spesialis', $dokter->spesialis) == 'anak' ? 'selected' : '' }}>Anak</option>
            <option value="saraf" {{ old('spesialis', $dokter->spesialis) == 'saraf' ? 'selected' : '' }}>Saraf</option>
            <option value="bedah" {{ old('spesialis', $dokter->spesialis) == 'bedah' ? 'selected' : '' }}>Bedah</option>
        </select>
        @error('spesialis')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
        <div class="form-group mb-2">
        <label for="poli">Poli</label>
        <select class="form-control @error('poli') is-invalid @enderror" name="poli">
            <option value="" selected disabled>Pilih Poli</option>
            <option value="anak" {{ old('poli', $dokter->poli) == 'anak' ? 'selected' : '' }}>Anak</option>
            <option value="bedah" {{ old('poli', $dokter->poli) == 'bedah' ? 'selected' : '' }}>Bedah</option>
            <option value="mata" {{ old('poli', $dokter->poli) == 'mata' ? 'selected' : '' }}>Mata</option>
            <option value="umum" {{ old('poli', $dokter->poli) == 'umum' ? 'selected' : '' }}>Umum</option>
            <option value="saraf" {{ old('poli', $dokter->poli) == 'saraf' ? 'selected' : '' }}>Saraf</option>
            <option value="tht" {{ old('poli', $dokter->poli) == 'tht' ? 'selected' : '' }}>THT</option>
            <option value="gigi" {{ old('poli', $dokter->poli) == 'gigi' ? 'selected' : '' }}>Gigi</option>
            <option value="kulit" {{ old('poli', $dokter->poli) == 'kulit' ? 'selected' : '' }}>Kulit</option>
            <option value="penyakit_dalam" {{ old('poli', $dokter->poli) == 'penyakit_dalam' ? 'selected' : '' }}>Penyakit Dalam</option>
            <option value="kandungan" {{ old('poli', $dokter->poli) == 'kandungan' ? 'selected' : '' }}>Kandungan</option>
        </select>
        @error('poli')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>

        <button class="btn btn-success" type="submit">Simpan</button>
        <a href="{{ route('dokter.index') }}" class="btn btn-primary"> Tampilkan data </a>
    </form>
</div>     
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>