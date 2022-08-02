<?php

class UserModel{
    /** @var PDO */
    private $db;

    /** @var Array */
    private $content =[];

    private $table = 'tbl_user';
    /*private $table2 = 'tbl_profile';*/

    public function __construct($dbConn){
        $this->db = $dbConn;
    }

    public function add($obj){
        array_push($this->content, $obj);
    }

    public function authenticate($email, $uuid) {
        $this->content = [];

        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE `user_email` = :email AND `user_uuid` = :uuid LIMIT 1");

        try {
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":uuid", $uuid);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            } return false;
        } catch (PDOException $e) {
            echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            return false;
        }
    }

    /*public function auth($user_email, $user_password, $user_uuid){
        $this->content = [];

        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE `user_email` = :user_email 
        and `user_password` = :user_password and `user_uuid` = :user_uuid limit 1");
        
        try{
            $stmt->bindValue(':user_email', $user_email);
            $stmt->bindValue(':user_password', $user_password);
            $stmt->bindValue(':user_uuid', $user_uuid);
            
            $stmt->execute();

            if ($stmt->rowCount() >0){
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
            return false;

        }catch(PDOException $e){
            echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            return false;
        }
    }*/

    public function read($id){
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE `id` = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return $stmt->fetch(PDO::FETCH_OBJ);
        } return false;
    }

    public function create($user_email, $user_password, $user_uuid, $user_usertype){

        $stmt =$this->db->prepare("INSERT INTO $this->table (`user_email`, `user_password`, `user_uuid`, `user_usertype`) 
        VALUES (:user_email, :user_password, :user_uuid, :user_usertype)");

        try{
            $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
            
            $stmt->bindValue(':user_email', $user_email);
            $stmt->bindValue(':user_password', $hashed_password);
            $stmt->bindValue(':user_uuid', $user_uuid);
            $stmt->bindValue(':user_usertype', $user_usertype);
            
            $stmt->execute();

            return true;

        }catch(PDOException $e){
            echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            return false;
        }
    }  

    public function getpassword($id ,$user_password){
        
        $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    }

    
    /*public function profile($fname,$mname,$lname,$gender,$telephone,$cellphone,
    $birthdate,$address,$house,$street,$barangay,$city,$province,$zipcode){

        $stmt=$this->db->prepare("insert into $this->table2 (`profile_fname`, `profile_mname`
        ,`profile_lname`, `profile_gender`, `profile_birthdate`, `profile_telephone`, `profile_cellphone`
        ,`profile_address`, `profile_house`, `profile_street`, `profile_barangay`
        ,`profile_city`, `profile_province`, `profile_zipcode`) 

        values (:profile_fname, :profile_mname, :profile_fname, :profile_gender, :profile_birthdate, :profile_telephone,
        :profile_cellphone, :profile_address, :profile_house, :profile_street, :profile_barangay,
        :profile_city, :profile_province, :profile_zipcode)");

        try{
            $stmt->bindValue(':profile_fname', $fname);
            $stmt->bindValue(':profile_mname', $mname);
            $stmt->bindValue(':profile_fname', $lname);
            $stmt->bindValue(':profile_gender', $gender);
            $stmt->bindValue(':profile_birthdate', $birthdate);
            $stmt->bindValue(':profile_telephone', $telephone);
            $stmt->bindValue(':profile_cellphone', $cellphone);
            $stmt->bindValue(':profile_address', $address);
            $stmt->bindValue(':profile_house', $house);
            $stmt->bindValue(':profile_street', $street);
            $stmt->bindValue(':profile_barangay', $barangay);
            $stmt->bindValue(':profile_city', $city);
            $stmt->bindValue(':profile_province', $province);
            $stmt->bindValue(':profile_zipcode', $zipcode);
            $stmt->execute();

            return true;
        }catch(PDOException $e){
            echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            return false;
        }

    }*/
    
}