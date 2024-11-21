<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
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
                                    <?php foreach ($destinations as $destination): ?>
                                        <option value="<?= $destination['id_destinasi'] ?>" <?= $destination['id_destinasi'] == $reservasi['destination_id'] ? 'selected' : '' ?>><?= htmlspecialchars($destination['nama_destinasi']) ?></option>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>