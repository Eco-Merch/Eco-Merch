<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        if(isset($_POST['login_submit'])){ 
            $res = 0;
            $user_id = 0;
            //$res = $user->loginUser($username,$_POST['password']);
            list($res,$user_id) = $user->loginUser($username,$_POST['password']);
            if($res==1){
                session_start();
                $_SESSION['user_id'] = $user_id;
                echo '<script>location.href="index.php?login=true";</script>';

            }else{
                echo '<script>showAlert("Login","Enter valid username and password","error");</script>';
            }
            
        }
    }
?>

<div class="form-container signin-container">
    <form method="post" action="#" id="form2">
        <h2>Login</h2>
        <div class="input-container">
            <input type="text" name="username" placeholder="Username" id="loginUsername">
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <small>Error message</small>
        </div>
        <div class="input-container">
            <input type="password" name="password" placeholder="Password" id="loginPassword">
            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <i class="fa fa-eye" aria-hidden="true" onclick="showPassword();"></i>
            <small>error message</small>
        </div>
        <!-- <a href="#">Forgot your Password?</a> -->
        <button type='submit' name="login_submit">Login</button>
    </form>
</div>