<?php
class ReservationModel {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function getAllReservations() {
        $query = "SELECT * FROM reservations";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getReservationById($id) {
        $query = "SELECT * FROM reservations WHERE reservation_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createReservation($user_id, $destination_id, $tgl_reservasi, $status_pembayaran) {
        $query = "INSERT INTO reservations (user_id, destination_id, tgl_reservasi, status_pembayaran) VALUES (:user_id, :destination_id, :tgl_reservasi, :status_pembayaran)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':destination_id', $destination_id);
        $stmt->bindParam(':tgl_reservasi', $tgl_reservasi);
        $stmt->bindParam(':status_pembayaran', $status_pembayaran);
        return $stmt->execute();
    }

    public function updateReservation($id, $user_id, $destination_id, $tgl_reservasi, $status_pembayaran) {
        $query = "UPDATE reservations SET user_id = :user_id, destination_id = :destination_id, tgl_reservasi = :tgl_reservasi, status_pembayaran = :status_pembayaran WHERE reservation_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':destination_id', $destination_id);
        $stmt->bindParam(':tgl_reservasi', $tgl_reservasi);
        $stmt->bindParam(':status_pembayaran', $status_pembayaran);
        return $stmt->execute();
    }

    public function deleteReservation($id) {
        $query = "DELETE FROM reservations WHERE reservation_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>