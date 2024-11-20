<!-- app/views/user/index.php -->
<h2>Data Destinasi</h2>
<a href="/destinasi/create">Tambah Destinasi Baru</a>
<ul>
    <?php foreach ($destinasi1 as $destinasi): ?>
        <div>
            <p><?= htmlspecialchars($destinasi['nama_destinasi']) ?> - <?= htmlspecialchars($destinasi['lokasi']) ?> - <?= htmlspecialchars($destinasi['deskripsi']) ?> - <?= htmlspecialchars($destinasi['harga_tiket']) ?>
            <a href="/destinasi/edit/<?php echo $destinasi['id_destinasi']; ?>">Edit</a> |
            <a href="/destinasi/delete/<?php echo $destinasi['id_destinasi']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
