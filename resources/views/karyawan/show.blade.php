<!-- resources/views/karyawan/show.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Profil Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Profil Karyawan</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $karyawan->nama }}</h5>
                <p class="card-text">Jabatan: {{ $karyawan->jabatan }}</p>
                <p class="card-text">Alamat: {{ $karyawan->alamat }}</p>
                <p class="card-text">Email: {{ $karyawan->email }}</p>
                <p class="card-text">Telepon: {{ $karyawan->telepon }}</p>
                <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>

</html>
