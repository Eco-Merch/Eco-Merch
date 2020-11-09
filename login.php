<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco-merch</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c61cdb8776.js" crossorigin="anonymous"></script>

    <?php require('functions.php'); ?>
</head>

<body id="body">
        <div class="login-header">
            <div class="container" id="container">
                <div class="nav-bar">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" id="logo" /></a>
                    </div>
                    <nav id="myNav">
                        <input type="checkbox" id="check" onclick="overflowFunction();"/>
                        <label for="check" class="checkbtn">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </label>
                        <ul class="ul">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="cart">
                        <a href="cart.php"><img src="images/bag.png" style="height:40px; width:50px;" /></a>
                        <a href="login.php"><img src="images/account.png" style="height:40px; width:45px;" /></a>
                    </div>
                </div>
            </div>

            <!-- -----------------------------LOGIN/SIGNUP--------------------------------------- -->

            <section>
                <div class="logincontainer" id="logincontainer">
                    <?php include("Template/_signup-template.php"); ?>
                    <div class="form-container signin-container">
                        <form action="#" id="form2">
                            <h2>Login</h2>
                            <div class="input-container">
                                <input type="text" name="name" placeholder="Username" id="loginUsername">
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
                            <a href="#">Forgot your Password?</a>
                            <button>Login</button>
                        </form>
                    </div>

                    <div class="overlay-container">
                        <div class="overlay">
                            <div class="overlay-panel overlay-left">
                                <h1>Hello, Friend</h1>
                                <p>Already a part of us? Let's Continue</p>
                                <button class="btn-overlay" id="login">Login</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h1>Welcome Back!</h1>
                                <p>Late to join the Noble cause? no worries.</p>
                                <button class="btn-overlay" id="signup">Sign up</button>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>


            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col-1">
                            <p>Explore</p>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="article.html">Articles</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class="footer-col-2">
                            <img src="images/logo.png" />
                            <p>We are here to provide you the hand to be the superhero, the world wants you to be.</p>
                        </div>
                        <div class="footer-col-3">
                            <div class= "footer-row">
                            <h3>Follow our socials</h3>
                            <ul>
                                <li class="facebook"><a href="https://www.facebook.com/dmcecolg/"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/d_mc_e"><i
                                            class="fab fa-twitter-square"></i></a></li>
                                <li class="instagram"><a href="https://www.instagram.com/explore/tags/dmce/?hl=en"><i
                                            class="fab fa-instagram"></i></a></li>
                                <li class="youtube"><a href="https://www.youtube.com/channel/UCGF7OHVqV0jn6e9e6FHPuAg"><i
                                            class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <hr />
                    <p class="copyright">Copyright 2020 - Datta Meghe College of Engineering</p>
                </div>
        </div>




        <script type="text/javascript">
            // ---------------------------------slider----------------------------
            var login = document.getElementById('login');
            var signup = document.getElementById('signup');
            var logincontainer = document.getElementById('logincontainer');

            signup.addEventListener('click', () => logincontainer.classList.add('right-panel-active'));
            login.addEventListener('click', () => logincontainer.classList.remove('right-panel-active'));


            // ----------------------------------form validation------------------------    
            var form = document.getElementById('form');
            var form2 = document.getElementById('form2');
            var username = document.getElementById('username');
            var email = document.getElementById('email');
            var password = document.getElementById('password');
            var password2 = document.getElementById('password2');
            var loginUsername = document.getElementById('loginUsername');
            var loginPassword = document.getElementById('loginPassword');

            // form.addEventListener('submit', (e) => {
            //     e.preventDefault();
            //     checkInputs();
            // })

            form2.addEventListener('submit', (evt) => {
                evt.preventDefault();
                checkLoginInputs();
            })

            function checkInputs() {
                
                var usernameValue = username.value.trim();
                var emailValue = email.value.trim();
                var passwordValue = password.value.trim();
                var password2Value = password2.value.trim();

                if (usernameValue === '') {
                    //show error
                    //add error class
                    setErrorFor(username, 'Username cannot be blank');
                }
                else {
                    //add success class
                    setSuccessFor(username);
                }

                if (emailValue === '') {
                    setErrorFor(email, 'Email cannot be blank');
                } else if (!isEmail(emailValue)) {
                    setErrorFor(email, 'Email is not valid');
                } else {
                    setSuccessFor(email);

                }

                if (passwordValue === '') {
                    setErrorFor(password, 'Password cannot be blank');
                } else if (!validPassword(passwordValue)) {
                    setErrorFor(password, 'atleast one lowercase, one number, greater than 8 digit.');
                }
                else {
                    //add success class
                    setSuccessFor(password);
                }

                if (password2Value === '') {
                    setErrorFor(password2, 'Password cannot be blank');
                } else if (passwordValue !== password2Value) {
                    setErrorFor(password2, 'Password does not match');
                } else {
                    setSuccessFor(password2);

                }
                

            }

            function checkLoginInputs() {
                var loginUsernameValue = loginUsername.value.trim();
                var loginPasswordValue = loginPassword.value.trim();

                if (loginPasswordValue == '') {
                    setErrorFor(loginPassword, 'Password cannot be blank');
                } else if (!validPassword(loginPasswordValue)) {
                    setErrorFor(loginPassword, 'atleast one lowercase, one number and must be greater than 8');
                } else {
                    setSuccessFor(loginPassword);
                }

                if (loginUsernameValue == '') {
                    setErrorFor(loginUsername, 'Username cannot be blank');
                } else {
                    setSuccessFor(loginUsername);
                }
            }


            function setErrorFor(input, message) {
                var inputContainer = input.parentElement;
                var small = inputContainer.querySelector('small');

                small.innerText = message;
                inputContainer.className = 'input-container error';
            }

            function setSuccessFor(input) {
                var inputContainer = input.parentElement;
                inputContainer.className = 'input-container success';
            }

            function isEmail(email) {
                return /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email);
            }

            function validPassword(password) {
                return /^(?=.*\d)(?=.*[a-z]).{8,}$/.test(password);
            }

            function showPassword() {

                var validatePass1 = document.getElementById("password");
                var validatePass2 = document.getElementById("password2");
                var validatePass3 = document.getElementById("loginPassword");


                if (validatePass1.type === "password") {
                    validatePass1.type = "text";

                } else {

                    validatePass1.type = "password";

                }
                if (validatePass2.type === "password") {
                    validatePass2.type = "text";

                } else {

                    validatePass2.type = "password";

                }

                if (validatePass3.type === "password") {

                    validatePass3.type = "text";
                } else {
                    validatePass3.type = "password";

                }

            }

            function overflowFunction() {
                var x = document.getElementById("body");
                x.addEventListener('click', () => body.classList.toggle('overflow'));
            }
        </script>
</body>