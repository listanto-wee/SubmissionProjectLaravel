<!DOCTYPE html>
<html lang="id">
<head>
        <meta charset="UTF-8">
        <title>Tambah Jurusan</title>
</head>
<body>
    <h1>Tambah Data Jurusan</h1>

    <form id="jurusanForm" action="{{ route('jurusan.store') }}" method="POST">
        @csrf
        <div>
            <label>Kode Jurusan</label>
            <input type="text" name="kode" value="{{ old('kode') }}" class="nav-input">
            @error('kode')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label>Nama Jurusan</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="nav-input">
            @error('nama')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

    <button type="submit" id="submitBtn">Simpan</button>
    <a href="{{ route('jurusan.index') }}">Kembali</a>
</form>
</body>
</html>

