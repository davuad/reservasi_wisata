<!-- app/views/user/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengguna Baru</title>
    <!-- Link ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Kustom CSS untuk tombol -->
    <style>
        .btn-custom-blue {
            background-color: #007bff; /* Warna biru custom */
            color: white;
        }
        .btn-custom-blue:hover {
            background-color: #0056b3; /* Biru lebih gelap saat hover */
            color: white;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <!-- Card untuk Form -->
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header bg-secondary text-white text-center">
            <h3 class="mb-0">Tambah Pengguna Baru</h3> <!-- Judul di dalam card -->
        </div>
        <div class="card-body">
            <!-- Form untuk tambah pengguna -->
            <form action="/user/store" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                    <input type="number" name="nomor_telepon" id="nomor_telepon" class="form-control" required>
                </div>

                <!-- Tombol dengan kelas kustom biru -->
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="/user/index" class="btn btn-secondary" >Kembali</a>
            </form>
        </div>
    </div>
</div>

<!-- Link ke file JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
