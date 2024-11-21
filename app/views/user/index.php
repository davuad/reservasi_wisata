<!-- app/views/user/index.php -->
<?php
require_once __DIR__ . '/../template/header.php';
?>

<div class="container mt-5">
    <h2 class="mb-4">Daftar Pengguna</h2>

    <a href="/user/create" class="btn btn-primary mb-4">Tambah Pengguna Baru</a>

    <!-- Tabel untuk menampilkan daftar pengguna -->
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['nama']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['nomor_telepon']) ?></td>
                    <td>
                        <a href="/user/edit/<?php echo $user['id_users']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/user/delete/<?php echo $user['id_users']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<<?php
require_once __DIR__ . '/../template/footer.php';
?>
