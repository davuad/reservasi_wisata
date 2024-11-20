<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Destinasi</title>
</head>
<body>
    <h2>Edit Destinasi</h2>
    <form action="/destinasi/update/<?php echo $destinasi['id_destinasi']; ?>" method="POST">
        <label for="nama_destinasi">Name:</label>
        <input type="text" id="nama_destinasi" name="nama_destinasi" value="<?php echo $destinasi['nama_destinasi']; ?>" required>
        <br>
        <label for="lokasi">Email:</label>
        <input type="text" id="lokasi" name="lokasi" value="<?php echo $destinasi['lokasi']; ?>" required>
        <br>
        <label for="deskripsi">Email:</label>
        <input type="text" id="deskripsi" name="deskripsi" value="<?php echo $destinasi['deskripsi']; ?>" required>
        <br>
        <label for="harga_tiket">Email:</label>
        <input type="text" id="harga_tiket" name="harga_tiket" value="<?php echo $destinasi['harga_tiket']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/destinasi/index">Back to List</a>
</body>
</html>