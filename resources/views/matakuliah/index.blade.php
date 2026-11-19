<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah</title>
</head>
<body>
    
    <h1>Daftar Matakuliah</h1>
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <a href="{{ route('matakuliah.create') }}">Tambah Matakuliah</a>
    <table border="1" cellpadding="6">
        <tr>   
            <th>No</th>
            <th>Kode Matkul</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        @forelse ($matakuliah as $m)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $m->kode_matakuliah }}</td>
            <td>{{ $m->nama_matakuliah }}</td>
            <td>{{ $m->sks }}</td>
            
            <td>
                <a href="/matakuliah/{{ $m->id }}">Aksi</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>