
<!-- resources/views/karyawan/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Daftar Karyawan</h2>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
        <table class="table">
            <thead>
                <tr>
                    <th>karyawan</th>
                    <th>Tanggal</th>
                    <th>jam masuk</th>
                    <th>jam keluar</th>
                </tr>
                @foreach ($karyawan as $k)
                    <tr>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->jabatan }}</td>
                        <td>
                            <a href="{{ route('karyawan.show', $k->id) }}" class="btn btn-primary">Lihat Profil</a>
                        </td>
                    </tr>
                @endforeach
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>

</html>
