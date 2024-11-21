<!-- app/views/reservations/index.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>
    <div class="container mt-5">
        <h2 class="mb-4">Data Reservasi</h2>
        <a href="/reservasi/create" class="btn btn-primary mb-3">Tambah Reservasi Baru</a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>ID Reservasi</th>
                        <th>Pengguna</th>
                        <th>Destinasi</th>
                        <th>Tanggal Reservasi</th>
                        <th>Status Pembayaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($reservasi1 as $reservasi): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($reservasi['reservation_id']) ?></td>
                            <td><?= htmlspecialchars($reservasi['user_name']) ?></td>
                            <td><?= htmlspecialchars($reservasi['destination_name']) ?></td>
                            <td><?= htmlspecialchars($reservasi['tgl_reservasi']) ?></td>
                            <td><?= htmlspecialchars($reservasi['status_pembayaran']) ?></td>
                            <td>
                                <a href="/reservasi/edit/<?php echo $reservasi['reservation_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/reservasi/delete/<?php echo $reservasi['reservation_id']; ?>" 
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