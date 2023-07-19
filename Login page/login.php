<?php
if(isset ($_POST["login"])){
    $email = $_POST["email"];
    $pasword = $_POST["password"];


    require_once "db_connection.php";
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQL_ASSOC);
    if ($user) {
        if (password_verify($pasword, $user["password"])) {
            header("Location: home.php");
            die();
        }else{
            echo "<div class = 'alert alert-danger'>Password does not match</div>";

        }
    }else{
        echo "<div class = 'alert alert-danger'>Email does not match</div>";
    }
}

?>