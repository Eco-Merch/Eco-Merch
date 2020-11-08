<?php
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert data into cart table
    public function insertIntoCart($params = null, $itemcategory, $table = "cart"){
        if($this->db->con != null){
            if($params != null){
                //insert into cart column
                //get table columns
                $columns = implode(',',array_keys($params));

                $values = implode(',',array_values($params));
                //create sql query

                $query_string = sprintf("INSERT INTO %s(%s,item_category) VALUES(%s,'%s')",$table,$columns,$values,$itemcategory);
                
                //execute sql query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    //to get user_id and item_id and insert into cart table
    public function addToCart($userid, $itemid, $itemcategory){
        if(isset($userid) && isset($itemid) && isset($itemcategory)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid,
            );
            
            //insert data into cart
            $result = $this->insertIntoCart($params,$itemcategory);
            if($result){
                 //reload the page
                 header("Location:".$_SERVER['PHP_SELF']);
             }
         }
    }

    //remove cart item 
    public function removeCartItem($itemid = null, $table = 'cart'){
        if($itemid != null){
        $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id = {$itemid}");
        if($result){
            header("Location:".$_SERVER['PHP_SELF']);
        }
        return $result;
        }
    }
    // sub total 
    // public function getSubTotal($arr){
    //     if(isset($arr)){
    //         $sum = 0;
    //         foreach($arr as $item){
    //             $sum += floatval($item[0]);
    //         }
    //         return sprintf('%.2f',$sum);
    //     }
    // }

    // get item_id of cart list
    public function getCartId($cartArray = null, $key = "item_id"){
        if($cartArray != null){
            $cart_id = array_map(function($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }
}

?>