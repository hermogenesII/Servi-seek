<?php

include './config/db_conn.php';

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    exit('Empty Field(s)');
}

if ($_POST['password'] !== $_POST['confirm-password']) {
    exit('Password error');
}

if (empty($_POST['username'] || empty($_POST['password']) || empty($_POST['email']))) {
    exit('Values Empty');
}

if ($stmt = $conn->prepare('SELECT user_id, user_password FROM user_tbl WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo 'Username Already Exists. Try Again';
    } else {
        if ($stmt = $conn->prepare('INSERT INTO user_tbl (username, user_password, user_email) VALUES (?, ? ,?)')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo 'Successfully Registered';
        } else {
            echo 'Error Occurred';
        }
    }
    $stmt->close();

} else {
    echo 'Error Occurred';
}
$conn->close();
