<?php
require_once '../config/database.php';

class Destination {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllDestinations() {
        $query = $this->db->query("SELECT id_destinasi, nama_destinasi FROM destinations");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>