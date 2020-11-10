<?php 
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
     // echo $_POST['remove_item_submit'];
        if(isset($_GET['login'])){
            echo '<script>showAlert("LOGIN","Login to Continue","warning");</script>';
        }
    }
?>