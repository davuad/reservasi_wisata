<?php
require_once '../app/models/Reservation.php';
require_once '../app/models/User.php';
require_once '../app/models/Destination.php';

class ReservationController {
    private $reservasiModel;
    private $userModel;
    private $destinationModel;

    public function __construct() {
        $this->reservasiModel = new Reservation();
        $this->userModel = new User();
        $this->destinationModel = new Destination();
    }

    public function index() {
        $reservasi1 = $this->reservasiModel->getAllReservation();
        require_once '../app/views/reservations/index.php';
    }

    public function create() {
        $users = $this->userModel->getAllUsers();
        $destinations = $this->destinationModel->getAllDestinations();
        require_once '../app/views/reservations/add.php';
    }

    public function store() {
        $user_id = $_POST['user_id'];
        $destination_id = $_POST['destination_id'];
        $tgl_reservasi = $_POST['tgl_reservasi'];
        $status_pembayaran = $_POST['status_pembayaran'];
        $this->reservasiModel->add($user_id, $destination_id, $tgl_reservasi, $status_pembayaran);
        header('Location: /reservasi/index');
    }

    public function edit($reservation_id) {
        $reservasi = $this->reservasiModel->find($reservation_id);
        $users = $this->userModel->getAllUsers();
        $destinations = $this->destinationModel->getAllDestinations();
        require_once '../app/views/reservations/edit.php';
    }

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

    public function delete($reservation_id) {
        $this->reservasiModel->delete($reservation_id);
        header("Location: /reservasi/index");
    }
}
?>