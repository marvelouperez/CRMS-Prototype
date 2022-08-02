<?php
    class LibraryController{
    /** @var LibraryModel */
    private $paper;

    public function __construct($dbConn) {
        $this->paper= new LibraryModel ($dbConn);
    }

    public function getAllPaper() {
        return $this->paper->readAll();
    }

    public function getID($id){
        return $this->paper->read($id);
    }
    
    }
?>