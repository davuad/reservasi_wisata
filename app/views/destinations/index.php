<!-- app/views/user/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Destinasi</h2>
        <a href="/destinasi/create" class="btn btn-primary mb-3">Tambah Destinasi Baru</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Destinasi</th>
                        <th>Lokasi</th>
                        <th>Deskripsi</th>
                        <th>Harga Tiket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($destinasi1 as $destinasi): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($destinasi['nama_destinasi']) ?></td>
                            <td><?= htmlspecialchars($destinasi['lokasi']) ?></td>
                            <td><?= htmlspecialchars($destinasi['deskripsi']) ?></td>
                            <td>Rp<?= number_format(htmlspecialchars($destinasi['harga_tiket']), 0, ',', '.') ?></td>
                            <td>
                                <a href="/destinasi/edit/<?php echo $destinasi['id_destinasi']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/destinasi/delete/<?php echo $destinasi['id_destinasi']; ?>" 
                                   class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
