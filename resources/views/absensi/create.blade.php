<!-- resources/views/absensi/create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Absensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2>Tambah Absensi</h2>
        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="karyawan_id" class="form-label">Karyawan</label>
                <select class="form-control" id="karyawan_id" name="karyawan_id">
                    @foreach ($karyawan as $k)
                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>
            <div class="mb-3">
                <label for="jam_masuk" class="form-label">Jam Masuk</label>
                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk">
            </div>
            <div class="mb-3">
                <label for="jam_keluar" class="form-label">Jam Keluar</label>
                <input type="time" class="form-control" id="jam_keluar" name="jam_keluar">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>

</html>
