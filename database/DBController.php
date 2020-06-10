<?php
class DBController
{
    //Database Connection
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database = "eco_merch";

    //connection property
    public $con = null;
    public function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Connection failed: ".$this->con->connect_error;
        }
        //echo "Connected successfully";
    }
    public function __desctruct()
    {
        $this->closeConnection();
    }

    //closing connection
    protected function closeConnection(){
        if($this->con !=null){
            $this->con->close();
            $this->con->null;
        }
    }
}
?>