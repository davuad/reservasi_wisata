<!-- app/views/destinasi/create.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>
    <div class="container mt-5">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-secondary  text-white text-center">
                <h3 class="mb-0">Tambah Destinasi Baru</h3>
            </div>
            <div class="card-body">
                
                <form action="/destinasi/store" method="POST">
                    <div class="mb-3">
                        <label for="nama_destinasi" class="form-label">Nama Destinasi</label>
                        <input type="text" name="nama_destinasi" id="nama_destinasi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga_tiket" class="form-label">Harga Tiket</label>
                        <input type="number" name="harga_tiket" id="harga_tiket" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/destinasi/index" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
<?php
require_once __DIR__ . '/../template/footer.php';
?>
