<?php

session_start();

require_once 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $username,
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($user){
    if(password_verify($password, $user['password'])){
        $_SESSION['username'] = $user['username'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['success'] = "Succesvol ingelogd";
        header('Location: ../index.php');
    } else {
        $_SESSION['error'] = "Invalid username or password";
        header('Location: ../tasks/login.php');
    }
} 
else{ 
    $_SESSION['error'] = "Invalid username or password";
    header('Location: ../tasks/login.php');
}

?>