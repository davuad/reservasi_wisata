<?php
// app/controllers/UserController.php
require_once '../app/models/Destinations.php';

class DestinasiController {
    private $destinasiModel;

    public function __construct() {
        $this->destinasiModel = new Destinasi();
    }

    public function index() {
        $destinasi1 = $this->destinasiModel->getAllDestinasi();
        require_once '../app/views/destinations/index.php';

    }

    public function create() {
        require_once '../app/views/destinations/create.php';
    }

    public function store() {
        $nama_destinasi = $_POST['nama_destinasi'];
        $lokasi = $_POST['lokasi'];
        $deskripsi = $_POST['deskripsi'];
        $harga_tiket = $_POST['harga_tiket'];
        $this->destinasiModel->add($nama_destinasi, $lokasi, $deskripsi, $harga_tiket);
        header('Location: /destinasi/index');
    }
    // Show the edit form with the user data
    public function edit($id_destinasi) {
        $destinasi = $this->destinasiModel->find($id_destinasi); // Assume find() gets user by ID
        require_once __DIR__ . '/../views/destinations/edit.php';
    }

    // Process the update request
    public function update($id_destinasi, $data) {
        $updated = $this->destinasiModel->update($id_destinasi, $data);
        if ($updated) {
            header("Location: /destinasi/index"); // Redirect to user list
        } else {
            echo "Failed to update user.";
        }
    }

    // Process delete request
    public function delete($id_destinasi) {
        $deleted = $this->destinasiModel->delete($id_destinasi);
        if ($deleted) {
            header("Location: /destinasi/index"); // Redirect to user list
        } else {
            echo "Failed to delete user.";
        }
    }
}
