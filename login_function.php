<?php
session_start();
include './config/db_conn.php';

if (isset($_POST['usernameemail']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}

$uname = validate($_POST['usernameemail']);
$pass = validate($_POST['password']);

if (empty($uname)) {
    header("Location: login.php?error=Username is required");
    exit();
} else if (empty($pass)) {
    header("Location: login.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM user_table WHERE username = '$uname' AND user_password = '$pass'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $uname && $row['user_password'] === $pass) {
        echo "Logged In!";
        $_SESSION['username'] = $row['username'];
        $_SESSION['user_password'] = $row['user_password'];
        $_SESSION['user_id'] = $row['user_id'];
        header("Location: home.php");
        exit();
    } else {
        header("Location: login.php?error=Incorrect Username or Password");
        exit;
    }
} else {
    header("Location: login.php");
    exit();
}
