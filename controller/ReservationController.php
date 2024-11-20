<?php
require_once 'model/ReservationModel.php';

class ReservationController {
    private $model;

    public function __construct($database) {
        $this->model = new ReservationModel($database);
    }

    // Menampilkan semua reservasi
    public function index() {
        $reservations = $this->model->getAllReservations();
        include 'view/reservation/reservation_view.php';
    }

    // Menampilkan detail reservasi
    public function show($id) {
        $reservation = $this->model->getReservationById($id);
        include 'view/reservation/reservation_detail.php'; // Anda bisa membuat file ini jika ingin menampilkan detail
    }

    // Menambah reservasi
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi input
            $user_id = $_POST['user_id'];
            $destination_id = $_POST['destination_id'];
            $tgl_reservasi = $_POST['tgl_reservasi'];
            $status_pembayaran = $_POST['status_pembayaran'];

            // Menyimpan reservasi ke database
            $this->model->createReservation($user_id, $destination_id, $tgl_reservasi, $status_pembayaran);
            header('Location: index.php?action=index');
            exit();
        } else {
            include 'view/reservation/reservation_add.php';
        }
    }

    // Mengedit reservasi
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi input
            $user_id = $_POST['user_id'];
            $destination_id = $_POST['destination_id'];
            $tgl_reservasi = $_POST['tgl_reservasi'];
            $status_pembayaran = $_POST['status_pembayaran'];

            // Memperbarui reservasi di database
            $this->model->updateReservation($id, $user_id, $destination_id, $tgl_reservasi, $status_pembayaran);
            header('Location: index.php?action=index');
            exit();
        } else {
            $reservation = $this->model->getReservationById($id);
            include 'view/reservation/reservation_edit.php';
        }
    }

    // Menghapus reservasi
    public function delete($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Menghapus reservasi dari database
            $this->model->deleteReservation($id);
            header('Location: index.php?action=index');
            exit();
        } else {
            $reservation = $this->model->getReservationById($id);
            include 'view/reservation/reservation_delete.php';
        }
    }
}
?>