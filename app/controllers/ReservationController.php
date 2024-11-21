<?php
// app/controllers/ReservationController.php
require_once '../app/models/Reservation.php';
require_once '../app/models/Destination.php';
require_once '../app/models/User.php';

class ReservationController {
    private $reservasiModel;
    private $destinasiModel;
    private $userModel;

    public function __construct() {
        $this->reservasiModel = new Reservation();
        $this->destinasiModel = new Destinasi();
        $this->userModel = new User();
    }

    public function index() {
        $reservasi1 = $this->reservasiModel->getAllReservation();
        require_once '../app/views/reservations/index.php';
    }

    public function create() {
        $users = $this->userModel->getAllUsers();
        $destinasi = $this->destinasiModel->getAllDestinasi();
        require_once '../app/views/reservations/create.php';
    }

    public function store() {
        $user_id = $_POST['user_id'];
        $destination_id = $_POST['destination_id'];
        $tgl_reservasi = $_POST['tgl_reservasi'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $this->reservasiModel->add(null, $user_id, $destination_id, $tgl_reservasi, $status_pembayaran);
        header('Location: /reservasi/index');
    }

    public function edit($reservation_id) {
        $reservasi = $this->reservasiModel->find($reservation_id); 
        $users = $this->userModel->getAllUsers();
        $destinasi = $this->destinasiModel->getAllDestinasi();
        require_once '../app/views/reservations/edit.php';
    }

    public function update($reservation_id) {
        $data = [
            'user_id' => $_POST['user_id'],
            'destination_id' => $_POST['destination_id'],
            'tgl_reservasi' => $_POST['tgl_reservasi'],
            'status_pembayaran' => $_POST['status_pembayaran']
        ];
        $updated = $this->reservasiModel->update($reservation_id, $data);
        if ($updated) {
            header("Location: /reservasi/index");
        } else {
            echo "Failed to update reservation.";
        }
    }

    public function delete($reservation_id) {
        $deleted = $this->reservasiModel->delete($reservation_id);
        if ($deleted) {
            header("Location: /reservasi/index"); 
        } else {
            echo "Failed to delete reservation.";
        }
    }
}