<?php

require_once ('include/connection.php');

$Mosha = (isset($_GET['action']) ? $_GET['action'] : null);

if ($Mosha = 'add') {
    if (isset($_POST['REGIST'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "INSERT INTO users (username,password,email) VALUES (:username,:password,:email) ";
        $query = $Conn->prepare($sql);
        $query->bindParam('username', $username, PDO::PARAM_STR);
        $query->bindParam('password', $password, PDO::PARAM_STR);
        $query->bindParam('email', $email, PDO::PARAM_STR);
        $insert = $query->execute();
        if ($insert == true) {
            echo "Done";
        }
        }
        require_once 'template/new-user.php';
    
} else {
    $sql='SELECT * FROM users';
    $query->prepare($sql);
    $query->execute();
    require_once ('template/users.php');
}
