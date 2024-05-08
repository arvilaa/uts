<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa Baru</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container col-md-5"> <!-- Tambahkan kelas mx-auto -->
        <h1 class="mt-5">Tambah Mahasiswa Baru</h1>
        <form method="POST" action="{{ route('uts.store') }}" class="mt-3"> <!-- Mengarahkan form ke method store() -->
            @csrf
            <div class="form-group">
                <label for="nama">Nama Lengkap :</label>
                <input type="text" id="nama" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="nim">NIM :</label>
                <input type="text" id="nim" name="nim" class="form-control">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" name="jurusan" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" id="alamat" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="no_telpon">Nomor Telepon :</label>
                <input type="text" id="no_telpon" name="no_telpon" class="form-control">
            </div>
            <div class="form-group">
                <label for="semester">Semester :</label>
                <input type="text" id="semester" name="semester" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
