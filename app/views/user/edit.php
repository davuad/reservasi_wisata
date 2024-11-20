<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Link ke file CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Card untuk Form Edit -->
    <div class="row justify-content-center">
    <div class="col-md-8">
    <div class="card">
        <div class="card-header bg-secondary text-white text-center">
            <h3>Edit User</h3>
        </div>
        <div class="card-body">
            <!-- Form untuk update data pengguna -->
            <form action="/user/update/<?php echo $user['id_users']; ?>" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $user['nama']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
                </div>

                <div class="mb-3">
                    <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                    <input type="text" id="nomor_telepon" name="nomor_telepon" class="form-control" value="<?php echo $user['nomor_telepon']; ?>" required>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="/user/index" class="btn btn-secondary">Back to List</a>
            </form>
        </div>
    </div>
</div>

<!-- Link ke file JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
