<!-- app/views/reservations/create.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Tambah Reservasi Baru</h3>
                    </div>
                    <div class="card-body">
                        <form action="/reservasi/store" method="POST">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Nama Pengguna</label>
                                <select name="user_id" class="form-select" required>
                                    <option value="">-- Pilih Pengguna --</option>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $user['id_users'] ?>"><?= htmlspecialchars($user['nama']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="destination_id" class="form-label">Nama Destinasi</label>
                                <select name="destination_id" class="form-select" required>
                                    <option value="">-- Pilih Destinasi --</option>
                                    <?php foreach ($destinations as $destination): ?>
                                        <option value="<?= $destination['id_destinasi'] ?>"><?= htmlspecialchars($destination['nama_destinasi']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
                                <input type="date" name="tgl_reservasi" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <select name="status_pembayaran" class="form-select">
                                    <option value="Pending">Pending</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Dibatalkan">Dibatalkan</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="/reservasi/index" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once __DIR__ . '/../template/footer.php';
?>