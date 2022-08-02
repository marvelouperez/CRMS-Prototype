<?php

class UserController{
    /** @var UserModel */
    private $user;

    public function __construct($dbConn){
        $this->user = new UserModel($dbConn);
    }

    public function authUser($email, $uuid, $password) {
        if (!empty($credentials = $this->user->authenticate($email, $uuid))) {
            if ($this->getPassword($credentials->id, $password)) {
                $this->verifyUser($credentials->id);
            } else {
                echo "Incorrect Password";
            }
        } else {
            echo "Incorrect Username or UUID";
        }
    }

    public function verifyUser($id) {
        $credentials = $this->user->read($id);
        if ($credentials->user_usertype == "student") {
            $_SESSION['account'] = $credentials;
            return header("Location: /account/student");
        }

        if ($credentials->user_usertype == "faculty") {
            $_SESSION['account'] = $credentials;
            return header("Location: /account/faculty");
        }

        if ($credentials->user_usertype == "admin") {
            return header("Location: /account/admin");
        }
    }

    public function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function getPassword($id, $password) {
        $credentials = $this->user->read($id);
        return password_verify($password, $credentials->user_password);
    }

    /*public function login($user_email, $user_password, $user_uuid){
        return $this->user->auth($user_email, $user_password, $user_uuid);
    }*/

    public function saveUser($user_email, $user_password, $user_uuid ,$user_usertype){
        return $this->user->create($user_email, $user_password, $user_uuid , $user_usertype);    
    }

    public function getID($id){
        return $this->user->read($id);
    }


    /*public function saveProfile($fname,$mname,$lname,$gender, $birthdate,$telephone,$cellphone,
    $address,$house,$street,$barangay,$city,$province,$zipcode){

        return $this->user->profile($fname,$mname,$lname,$gender, $birthdate,$telephone,$cellphone,
        $address,$house,$street,$barangay,$city,$province,$zipcode);
    }*/

}


