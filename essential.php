<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'Hotel';

$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    die("Cannot connect to Database" . mysqli_connect_error());
}

//nid photo upload 
define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'].'/DEMO/Images/');
define('USERS_FOLDER','Users/');

function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value);
    }
    return $data;
}

function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //... is splat operator
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        } else {
            mysqli_stmt_close($stmt);
            die("Query cannot be executed - Select");
        }
    } else {
        die("Query cannot be executed - Select");
    }
}

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
    echo <<<alert
 <div class="alert $bs_class alert-warning alert-dismissible fade show custom-alert" role="alert">
   <strong class="me-3">$msg</strong>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
alert;
}

function redirect($url)
{
    echo "<script>
    window.location.href='$url';
    </script>";
}

function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        echo "<script>
        window.location.href='adminIndex.php';
        </script>";
    }
}

function uploadNidPassportPhoto($image)
{
    $valid_mine = ['image/jpeg', 'image/png', 'image/webp' ];
    $img_mine = $image['type'];

    if(!in_array($img_mine, $valid_mine))
    {
        return 'inv_img'; //inavlid image format
    }
    else{
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_'.random_int(11111,99999).".jpeg";

        $img_path = UPLOAD_IMAGE_PATH.USERS_FOLDER.$rname;

        if($ext == 'png' || $ext == 'PNG')
        {
            $img = imagecreatefrompng($image['tmp_name']);
        }
        else if($ext == 'webp' || $ext == 'WEBP')
        {
            $img = imagecreatefromwebp($image['tmp_name']);
        }
        else{
            $img = imagecreatefromjpeg($image['tmp_name']);
        }

        //if(move_uploaded_file($image['tmp_name'], $img_path))
        if(imagejpeg($img, $img_path,75))
        {
            return $rname;
        }
        else{
            return 'upd_failed';
        }
    }
}


?>