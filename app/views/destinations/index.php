<!-- app/views/destinations/index.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>
    <div class="container mt-5 p-4" style="background-color: #cee0e6;">
        <h2 class="mb-4 text-center">Data Destinasi</h2>
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
<?php
require_once __DIR__ . '/../template/footer.php';
?>
