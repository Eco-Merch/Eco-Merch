<?php

class User
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //add new user
    public function addUser($username,$email,$password){
        if(isset($username)){
            $res = $this->db->con->query("SELECT * from user WHERE username='{$username}'");
            $row = mysqli_num_rows($res);
            
            if($row == 1){
                // echo '<script>alert("Username already exist");</script>';
                echo '<script>showAlert("Sign up","Username Already Exist","error");</script>';
            }else{
                $result = $this->db->con->query("INSERT INTO user(username,email,password) VALUES('{$username}','{$email}','{$password}')");
                echo '<script>showAlert("Sign up","Account created Login to Continue","success");</script>';
            }
        }else{echo '<script>showAlert("Sign up","Fill all details","error");</script>';}
    }
    
    //check for user
    public function loginUser($username,$password){
        $result = $this->db->con->query("SELECT user_id FROM user WHERE username='{$username}' and password ='{$password}'");
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $user_id = $row['user_id'];
        $res = mysqli_num_rows($result);
        return array($res,$user_id);
        
    }
}   
?>