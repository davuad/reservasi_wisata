<?php
require_once '../config/database.php';

class Reservation {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllReservation() {
        $query = $this->db->query("SELECT r.reservation_id, u.nama AS nama_pengguna, d.nama_destinasi AS nama_destinasi, r.tgl_reservasi, r.status_pembayaran FROM reservations r JOIN users u ON r.user_id = u.id_users JOIN destinations d ON r.destination_id = d.id_destinasi");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($reservation_id) {
        $query = $this->db->prepare("SELECT * FROM reservations WHERE reservation_id = :reservation_id");
        $query->bindParam(':reservation_id', $reservation_id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($user_id, $destination_id, $tgl_reservasi, $status_pembayaran) {
        $query = $this->db->prepare("INSERT INTO reservations (user_id, destination_id, tgl_reservasi, status_pembayaran) 
                                      VALUES (:user_id, :destination_id, :tgl_reservasi, :status_pembayaran)");
        $query->bindParam(':user_id', $user_id);
        $query->bindParam(':destination_id', $destination_id);
        $query->bindParam(':tgl_reservasi ', $tgl_reservasi);
        $query->bindParam(':status_pembayaran', $status_pembayaran);
        return $query->execute();
    }

    public function update($reservation_id, $data) {
        $query = "UPDATE reservations SET user_id = :user_id, destination_id = :destination_id, 
                  tgl_reservasi = :tgl_reservasi, status_pembayaran = :status_pembayaran 
                  WHERE reservation_id = :reservation_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $data['user_id']);
        $stmt->bindParam(':destination_id', $data['destination_id']);
        $stmt->bindParam(':tgl_reservasi', $data['tgl_reservasi']);
        $stmt->bindParam(':status_pembayaran', $data['status_pembayaran']);
        $stmt->bindParam(':reservation_id', $reservation_id);
        return $stmt->execute();
    }

    public function delete($reservation_id) {
        $query = "DELETE FROM reservations WHERE reservation_id = :reservation_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':reservation_id', $reservation_id);
        return $stmt->execute();
    }
}
?>