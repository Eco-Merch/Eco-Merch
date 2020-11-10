<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch product data for any table
    public function getProductData($table_name){
        $result = $this->db->con->query("SELECT * FROM {$table_name}");
        
        $resultArray = array();

    //fetch product data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        
        return $resultArray;
    }

    //get cart data [with user_id condition] to show only the current user's data
    public function getCartTableDataUser($table_name,$user_id){
        $result = $this->db->con->query("SELECT * FROM {$table_name} WHERE user_id='{$user_id}'");
    
        $resultArray = array();
    
        //fetch data one by one
            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }

    //get cart data to check item is present in cart table [with item_category condition]
    public function getCartTableData($table_name,$item_category){
    $result = $this->db->con->query("SELECT * FROM {$table_name} WHERE item_category='{$item_category}'");

    $resultArray = array();

    //fetch data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }
    //get product for cart using item_id and item_category
    public function getCartProduct($item_id = null, $table){
        if(isset($item_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE item_id={$item_id}");
            $resultArray = array();

            //fetch product data one by one
            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
            }
        }
}