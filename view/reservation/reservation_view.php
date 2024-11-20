<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Reservasi</h2>
    <a href="index.php?action=create" class="btn btn-primary mb-4">Buat Reservasi Baru</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID Reservasi</th>
                <th>ID Pengguna</th>
                <th>ID Destinasi</th>
                <th>Tanggal Reservasi</th>
                <th>Status Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= htmlspecialchars($reservation['reservation_id']) ?></td>
                    <td><?= htmlspecialchars($reservation['user_id']) ?></td>
                    <td><?= htmlspecialchars($reservation['destination_id']) ?></td>
                    <td><?= htmlspecialchars($reservation['tgl_reservasi']) ?></td>
                    <td><?= htmlspecialchars($reservation['status_pembayaran']) ?></td>
                    <td>
                        <a href="index.php?action=update&id=<?= $reservation['reservation_id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="index.php?action=delete&id=<?= $reservation['reservation_id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus reservasi ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>