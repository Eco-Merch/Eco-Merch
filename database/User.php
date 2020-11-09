<?php

class User
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function addUser($username,$email,$password){
        $res = $this->db->con->query("SELECT * from user WHERE username='{$username}'");
        $row = mysqli_num_rows($res);
        
        if($row == 1){
            // echo '<script>alert("Username already exist");</script>';
            echo '<script>showAlert("Sign up","Username Already Exist","error");</script>';
        }else{
            $result = $this->db->con->query("INSERT INTO user(username,email,password) VALUES('{$username}','{$email}','{$password}')");
            echo '<script>showAlert("Sign up","Account created Login to Continue","success");</script>';
        }
    }
    //fetch product data

}
?>