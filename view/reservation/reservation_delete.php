<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Hapus Reservasi</h2>
    <p>Apakah Anda yakin ingin menghapus reservasi dengan ID: <?= htmlspecialchars($reservation['reservation_id']) ?>?</p>
    <form action="index.php?action=delete&id=<?= $reservation['reservation_id'] ?>" method="POST">
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="index.php?action=index" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>