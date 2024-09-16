@extends('layouts.master')
@section('content')
<body>

    <div class="container mb-3">
        <h1>Form Data Obat</h1>
        <a href="{{route('obat.index')}}" class="btn btn-primary">Tampilkan data</a>
        <form action="{{route('obat')}}" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="kode_obat">Kode Obat</label>
                <input type="number" class="form-control @error('tanggal_pemriksaan')
                    is-invalid
                @enderror" value="{{ old('kode_obat') }}" name="kode_obat">
                @error('kode_obat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="nama_obat">Nama Obat</label>
                <input type="text" class="form-control @error('nama_obat')
                    is-invalid
                @enderror" value="{{ old('nama_obat') }}" name="nama_obat">
                @error('nama_obat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group mb-2">
            <label for="jenis_obat">Jenis Obat</label>
            <select class="form-control @error('jenis_obat') is-invalid @enderror" name="jenis_obat">
                <option value="" selected disabled>Pilih Jenis Obat</option>
                <option value="Analgesik" {{ old('jenis_obat') == 'Analgesik' ? 'selected' : '' }}>Analgesik</option>
                <option value="Antibiotik" {{ old('jenis_obat') == 'Antibiotik' ? 'selected' : '' }}>Antibiotik</option>
                <option value="Antihistamin" {{ old('jenis_obat') == 'Antihistamin' ? 'selected' : '' }}>Antihistamin</option>
                <!-- Tambahkan atau ubah pilihan jenis obat lainnya sesuai kebutuhan -->
            </select>
            @error('jenis_obat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

            <div class="form-group mb-2">
            <label for="sediaan_obat">Sediaan Obat</label>
            <select class="form-control @error('sediaan_obat') is-invalid @enderror" name="sediaan_obat">
                <option value="" selected disabled>Pilih Sediaan Obat</option>
                <option value="Tablet" {{ old('sediaan_obat') == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                <option value="Sirup" {{ old('sediaan_obat') == 'Sirup' ? 'selected' : '' }}>Sirup</option>
                <!-- Tambahkan atau ubah opsi sediaan obat lainnya sesuai kebutuhan -->
            </select>
            @error('sediaan_obat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

            <div class="form-group mb-2">
            <label for="dosis">Dosis</label>
            <select class="form-control @error('dosis') is-invalid @enderror" name="dosis">
                <option value="" selected disabled>Pilih Dosis</option>
                <option value="400mg" {{ old('dosis') == '400mg' ? 'selected' : '' }}>400mg</option>
                <option value="500mg" {{ old('dosis') == '500mg' ? 'selected' : '' }}>500mg</option>
                <option value="600mg" {{ old('dosis') == '600mg' ? 'selected' : '' }}>600mg</option>
                <option value="1000mg" {{ old('dosis') == '1000mg' ? 'selected' : '' }}>1000mg</option>
                <option value="200mg" {{ old('dosis') == '200mg' ? 'selected' : '' }}>200mg</option>
                <!-- Tambahkan atau ubah pilihan dosis lainnya sesuai kebutuhan -->
            </select>
            @error('dosis')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
            <div class="form-group mb-2">
                <label for="harga">Harga</label>
                <input type="number" class="form-control @error('harga')
                    is-invalid
                @enderror" value="{{ old('harga') }}" name="harga">
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">simpan</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</html>
@endsection