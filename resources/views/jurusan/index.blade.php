<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Jurusan</title>
</head>
<body>
    <h1>Daftar Jurusan</h1>
    @if (session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <a href="{{ route('jurusan.create') }}">Tambah Jurusan</a>


    <table border="1" cellpadding="6">
        <tr>   
            <th>No</th>
            <th>Kode</th>
            <th>Nama Jurusan</th>
        </tr>
        @forelse ($jurusans as $j)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $j->kode }}</td>
            <td>{{ $j->nama }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Belum ada data.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>