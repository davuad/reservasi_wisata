<?php
// app/controllers/ReservationController.php
require_once '../app/models/Reservation.php';

class ReservationController {
    private $reservasiModel;

    public function __construct() {
        $this->reservasiModel = new Reservation();
    }

    // Menampilkan semua reservasi
    public function index() {
        $reservasi1 = $this->reservasiModel->getAllReservation();
        require_once '../app/views/reservations/index.php';
    }

    // Menampilkan form untuk menambah reservasi
    public function create() {
        require_once '../app/views/reservations/add.php';
    }

    // Menyimpan reservasi baru
    public function store() {
        $user_id = $_POST['user_id'];
        $destination_id = $_POST['destination_id'];
        $tgl_reservasi = $_POST['tgl_reservasi'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $this->reservasiModel->add($user_id, $destination_id, $tgl_reservasi, $status_pembayaran);
        header('Location: /reservasi/index');
    }

    // Menampilkan form untuk mengedit reservasi
    public function edit($reservation_id) {
        $reservasi = $this->reservasiModel->find($reservation_id);
        require_once '../app/views/reservations/edit.php';
    }

    // Mengupdate reservasi
    public function update($reservation_id) {
        $data = [
            'user_id' => $_POST['user_id'],
            'destination_id' => $_POST['destination_id'],
            'tgl_reservasi' => $_POST['tgl_reservasi'],
            'status_pembayaran' => $_POST['status_pembayaran']
        ];
        $this->reservasiModel->update($reservation_id, $data);
        header("Location: /reservasi/index");
    }

    // Menghapus reservasi
    public function delete($reservation_id) {
        $this->reservasiModel->delete($reservation_id);
        header("Location: /reservasi/index");
    }
}
?>