<?php
// app/models/User.php
require_once '../config/database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllUsers() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id_users) {
        $query = $this->db->prepare("SELECT * FROM users WHERE id_users = :id_users");
        $query->bindParam(':id_users', $id_users, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function add($nama, $email, $nomor_telepon) {
        $query = $this->db->prepare("INSERT INTO users (nama, email, nomor_telepon) VALUES (:nama, :email, :nomor_telepon)");
        $query->bindParam(':nama', $nama);
        $query->bindParam(':email', $email);
        $query->bindParam(':nomor_telepon', $nomor_telepon);
        return $query->execute();
    }

    // Update user data by ID
    public function update($id_users, $data) {
        $query = "UPDATE users SET nama = :nama, email = :email, nomor_telepon = :nomor_telepon WHERE id_users = :id_users";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':nomor_telepon', $data['nomor_telepon']);
        $stmt->bindParam(':id_users', $id_users);
        return $stmt->execute();
    }

    // Delete user by ID
    public function delete($id_users) {
        $query = "DELETE FROM users WHERE id_users = :id_users";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_users', $id_users);
        return $stmt->execute();
    }
}
