<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['signup_submit'])){ 
            $user->addUser($_POST['username'],$_POST['email'],$_POST['password']);
            
        }
    }
?> 

<div class="form-container signup-container">
    <form id="form" method="post">
        <h2>Create an account</h2>
        <div class="input-container">
               <input type="text" name="username" placeholder="Username" id="username">
               <i class="fa fa-check-circle-o" aria-hidden="true"></i>
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
               <small>error message</small>
        </div>
        <div class="input-container">
               <input type="text" name="email" placeholder="Email" id="email">
               <i class="fa fa-check-circle-o" aria-hidden="true"></i>
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
               <small>error message</small>
        </div>
        <div class="input-container">
               <input type="password" name="password" placeholder="Create Password" id="password">
               <i class="fa fa-check-circle-o" aria-hidden="true"></i>
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
               <i class="fa fa-eye" aria-hidden="true" onclick="showPassword();"></i>
               <small>error message</small>
        </div>
        <div class="input-container">
               <input type="password" name="confirmpwd" placeholder="Confirm Password" id="password2">
               <i class="fa fa-check-circle-o" aria-hidden="true"></i>
               <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
               <i class="fa fa-eye" aria-hidden="true" onclick="showPassword();"></i>
               <small>error message</small>
        </div>
        <button type="submit "id="submit" name="signup_submit">Submit</button>
    </form>
</div>             