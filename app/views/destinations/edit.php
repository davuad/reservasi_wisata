<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Destinasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Edit Destinasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="/destinasi/update/<?php echo $destinasi['id_destinasi']; ?>" method="POST">
                            <div class="mb-3">
                                <label for="nama_destinasi" class="form-label">Nama Destinasi</label>
                                <input type="text" id="nama_destinasi" name="nama_destinasi" 
                                       value="<?php echo htmlspecialchars($destinasi['nama_destinasi']); ?>" 
                                       class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="lokasi" class="form-label">Lokasi</label>
                                <input type="text" id="lokasi" name="lokasi" 
                                       value="<?php echo htmlspecialchars($destinasi['lokasi']); ?>" 
                                       class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea id="deskripsi" name="deskripsi" 
                                          class="form-control" rows="3" required><?php echo htmlspecialchars($destinasi['deskripsi']); ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="harga_tiket" class="form-label">Harga Tiket</label>
                                <input type="number" id="harga_tiket" name="harga_tiket" 
                                       value="<?php echo htmlspecialchars($destinasi['harga_tiket']); ?>" 
                                       class="form-control" required>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/destinasi/index" class="btn btn-secondary">Kembali</a>
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
