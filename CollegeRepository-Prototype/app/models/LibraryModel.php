<?php
class LibraryModel{
    /** @var PDO */
    private $db;

    /** @var Array */
    private $content = [];

    private $table = 'tbl_paper';

    public function __construct($dbConn) {
        $this->db = $dbConn;
    }

    public function add($obj) {
        array_push($this->content, $obj);
    }

    public function readAll() {
        $this->content = [];

        $stmt = $this->db->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $this->add($row);
            } return $this->content;
        }
    }

    public function read($id){
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE `id` = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        } return false;
    }


}