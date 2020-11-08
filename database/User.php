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
        $result = $this->db->con->query("INSERT INTO user(username,email,password) VALUES('{$username}','{$email}','$password')");
        echo '<script>echo alert("hello");</script>';
    }
    //fetch product data

}
?>