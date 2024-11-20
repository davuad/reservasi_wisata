<?php
// app/models/destinasi.php
require_once '../config/database.php';

class Destinasi {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllDestinasi() {
        $query = $this->db->query("SELECT * FROM destinations");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_destinasi) {
        $query = $this->db->prepare("SELECT * FROM destinations WHERE id_destinasi = :id_destinasi");
        $query->bindParam(':id_destinasi', $id_destinasi, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama_destinasi, $lokasi, $deskripsi, $harga_tiket) {
        $query = $this->db->prepare("INSERT INTO destinations (nama_destinasi, lokasi, deskripsi, harga_tiket) VALUES (:nama_destinasi, :lokasi, :deskripsi, :harga_tiket)");
        $query->bindParam(':nama_destinasi', $nama_destinasi);
        $query->bindParam(':lokasi', $lokasi);
        $query->bindParam(':deskripsi', $deskripsi);
        $query->bindParam(':harga_tiket', $harga_tiket);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id_destinasi, $data) {
        $query = "UPDATE destinations SET nama_destinasi = :nama_destinasi, lokasi = :lokasi, deskripsi = :deskripsi, harga_tiket = :harga_tiket WHERE id_destinasi = :id_destinasi";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama_destinasi', $data['nama_destinasi']);
        $stmt->bindParam(':lokasi', $data['lokasi']);
        $stmt->bindParam(':deskripsi', $data['deskripsi']);
        $stmt->bindParam(':harga_tiket', $data['harga_tiket']);
        $stmt->bindParam(':id_destinasi', $id_destinasi);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_destinasi) {
        $query = "DELETE FROM destinations WHERE id_destinasi = :id_destinasi";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_destinasi', $id_destinasi);
        return $stmt->execute();
    }
}
