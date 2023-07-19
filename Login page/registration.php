<?php
if(isset($_POST['submit'])){
    $username = $_POST['Username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $passwordHash =password_hash($password, PASSWORD_DEFAULT);


    $errors = array();

    if(empty($username) OR empty($email) OR empty($password) OR empty($confirmPassword)){
        array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Invalid email");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }
    if ($password !== $confirmPassword) {
        array_push($errors, "Password does not match");
    }
    require_once "db_connection.php";

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);
    if ($rowCount > 0) {
        array_push($errors, "Email already used");
    }

    if (count ($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class = 'alert alert-danger'>$error</div>";
        }
        }else{
            // we will insert the data in the database
            $sql = "INSERT INTO users(username, email, password) VALUES(?,?,?)" ;
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss", $username, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class= alert 'alert-success'>Registered successfully</div>";
            }else{
                die("Something went wrong");
            }
        }
    }

?>