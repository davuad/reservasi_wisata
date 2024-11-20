<!-- app/views/user/create.php -->
<h2>Tambah Destinasi Baru</h2>
<form action="/destinasi/store" method="POST">
    <label for="nama_destinasi">Nama Destinasi:</label>
    <input type="text" name="nama_destinasi" id="nama_destinasi" required><br>
    <label for="lokasi">Lokasi:</label>
    <input type="text" name="lokasi" id="lokasi" required><br>
    <label for="deskripsi">Deskripsi:</label>
    <input type="text" name="deskripsi" id="deskripsi" required><br>
    <label for="harga_tiket">Harga Tiket:</label>
    <input type="text" name="harga_tiket" id="harga_tiket" required><br>
    <button type="submit">Simpan</button>
</form>
