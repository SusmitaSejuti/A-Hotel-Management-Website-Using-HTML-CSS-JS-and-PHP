<?php
require('connection.php');
session_start();

#REGISTRATION

if (isset($_POST['register'])) {
    /* $username = $_POST['username'];
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    $full_name = $_POST['full_name'];*/


    $user_exist_query = "SELECT * FROM registered_user WHERE username = '$_POST[username]' OR email =  '$_POST[email]';";
    $result = mysqli_query($con, $user_exist_query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            //username email both or any one alraedy taken
            $result_fetch = mysqli_fetch_assoc($result);
            if ($result_fetch['username'] == $_POST['username']) {
                // registration er time e user name alraedy taken kintu email unique ache
                echo "
                <script>
                      alert('$result_fetch[username] -Username is alraedy used');
                     window.location.href='indexlogin.php';
                 </script>
                 ";
            } else {
                //email alraedy taken kintu user_name unique ache
                echo "
                <script>
                      alert('$result_fetch[email] -E-mail is alraedy used');
                     window.location.href='indexlogin.php';
                 </script>
                 ";
            }
        } else {
            // email user_name none is taken
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO registered_user (`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password');";
            if (mysqli_query($con, $query)) //query fire korbe
            {
                //data insert hobe successfully
                echo "
                <script>
                      alert('Registration Successful');
                     window.location.href='index2.php';
                 </script>
                 ";
            } else {
                //data insert na hole
                echo "
                <script>
                      alert('Cannot Run Query');
                     window.location.href='indexlogin.php';
                 </script>
                 ";
            }
        }
    } else {
        echo "
		   <script>
		         alert('Cannot Run Query');
		        window.location.href='indexlogin.php';
		    </script>
		    ";
    }
}

#LOGIN

if (isset($_POST['login'])) {
    $query = "SELECT * FROM registered_user WHERE email = '$_POST[email]';";
    $result = mysqli_query($con, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) // one row seleced means one user selected
        {
            $result_fetch =  mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $result_fetch['password'])) {
                // password match korle
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$result_fetch['username'];
                 header("location: index2.php");
            } else {
                //incorrect password
                echo "
                <script>
                      alert('Password is incorrect');
                     window.location.href='indexlogin.php';
                 </script>
                 ";
            }
        } else {
            echo "
            <script>
                  alert('Email is not correct or not registered');
                 window.location.href='indexlogin.php';
             </script>
             ";
        }
    } else {
        echo "
        <script>
              alert('Cannot Run Query');
             window.location.href='indexlogin.php';
         </script>
         ";
    }
}
?>