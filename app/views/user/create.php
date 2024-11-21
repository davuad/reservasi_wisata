<!-- app/views/user/create.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>

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

<?php
require_once __DIR__ . '/../template/footer.php';
?>
