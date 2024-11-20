<!DOCTYPE ```php
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Edit Reservasi</h2>
    <form action="index.php?action=update&id=<?= $reservation['reservation_id'] ?>" method="POST">
        <div class="mb-3">
            <label for="user_id" class="form-label">ID Pengguna</label>
            <input type="number" name="user_id" class="form-control" value="<?= htmlspecialchars($reservation['user_id']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="destination_id" class="form-label">ID Destinasi</label>
            <input type="number" name="destination_id" class="form-control" value="<?= htmlspecialchars($reservation['destination_id']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="tgl_reservasi" class="form-label">Tanggal Reservasi</label>
            <input type="date" name="tgl_reservasi" class="form-control" value="<?= htmlspecialchars($reservation['tgl_reservasi']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
            <select name="status_pembayaran" class="form-select">
                <option value="Pending" <?= $reservation['status_pembayaran'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                <option value="Lunas" <?= $reservation['status_pembayaran'] == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
                <option value="Dibatalkan" <?= $reservation['status_pembayaran'] == 'Dibatalkan' ? 'selected' : '' ?>>Dibatalkan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="index.php?action=index" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>