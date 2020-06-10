<?php

class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //fetch product data
    public function getProductData($table_name){
        $result = $this->db->con->query("SELECT * FROM {$table_name}");
        print_r($result);
        $resultArray = array();

    //fetch product data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    public function getTableData($table_name,$item_category){
    $result = $this->db->con->query("SELECT * FROM {$table_name} WHERE item_category='{$item_category}'");

        $resultArray = array();

    //fetch product data one by one
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