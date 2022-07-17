<?php

require('connection.php');
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <title> User Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body class="bg">
    <header>
        <h2>Welcome to Hotel DS Palace</h2>

        <!--<nav>
            <a href="#">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
            <a href="#">Home</a>
        </nav>

        <a class="admin" href="adminIndex.php">ADMIN PANEL</a>-->
        <?php
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
            echo "
            <div class='user'>
            $_SESSION[username]  <a href='logout2.php'>LOGOUT</a>
            </div>
            ";
        } else {
            echo "
            <div class='sign-in-up'>
                <button type='button' onclick=\"popup('login-popup')\">LOGIN</button>
                <button type='button' onclick=\"popup('register-popup')\">REGISTER</button>
            </div>
            ";
        }
        ?>
        <!--<div class="sign-in-up">
            <button type="button" onclick="popup('login-popup')">LOGIN</button>
            <button type="button" onclick="popup('register-popup')">REGISTER</button>
        </div>-->
    </header>
    <!--LOGIN -->
    <div class="popup-container" id="login-popup">
        <div class="popup">
            <form method="POST" action="log&res.php">
                <h2>
                    <span>User Login</span>
                    <button type="reset" onclick="popup('login-popup')">X</button>
                </h2>
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="login">LOGIN</button>
            </form>
        </div>
    </div>

    <!-- REGISTRATION -->
    <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="log&res.php">
                <h2>
                    <span>User Registration</span>
                    <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="Full Name" name="fullname">
                <input type="text" placeholder="User Name" name="username">
                <input type="text" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="register-btn" name="register">REGISTER</button>
            </form>
        </div>
    </div>

    <?php
    /*if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

        echo "<h1 style='text-align: center; margin-top: 200px;'> WELCOME TO HOTEL DS PALACE -$_SESSION[username]</h1>";
    }*/
    ?>
    <img src="Images\all\home page background.png">

    <script>
        //login r Registration btn theke form show kore
        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            } else {
                get_popup.style.display = "flex";
            }

        }
    </script>
</body>

</html>