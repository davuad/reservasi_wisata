<!-- app/views/reservations/edit.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>
    <div class="container mt-3 my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Edit Reservasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="/reservasi/update/<?php echo $reservasi['reservation_id']; ?>" method="POST">
                            <div class="mb-3">
                                <label for="user_id" class="form-label">Nama Pengguna</label>
                                <select name="user_id" class="form-select" required>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $user['id_users'] ?>" <?= $user['id_users'] == $reservasi['user_id'] ? 'selected' : '' ?>><?= htmlspecialchars($user['nama']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="destination_id" class="form-label">Nama Destinasi</label>
                                <select name="destination_id" class="form-select" required>
                                    <option value="">-- Pilih Destinasi --</option>
                                    <?php foreach ($destinations as $destination): ?>
                                        <option value="<?= $destination['id_destinasi'] ?>" 
                                            <?= $destination['id_destinasi'] == $reservasi['destination_id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($destination['nama_destinasi']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
                                <input type="date" name="tgl_reservasi" value="<?php echo htmlspecialchars($reservasi['tgl_reservasi']); ?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <select name="status_pembayaran" class="form-select">
                                    <option value="Pending" <?= $reservasi['status_pembayaran'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                    <option value="Lunas" <?= $reservasi['status_pembayaran'] == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
                                    <option value="Dibatalkan" <?= $reservasi['status_pembayaran'] == 'Dibatalkan' ? 'selected' : '' ?>>Dibatalkan</option>
                                </select>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/reservasi/index" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once __DIR__ . '/../template/footer.php';
?>