<?php
require_once 'conn.php';
session_start();
$naam = $_POST['naam'];
$username = $_POST['username'];
$pass = $_POST['password'];

//Check of iemand níet is ingelogd
/// TODO: start sessie
if(isset($_SESSION['user_id']))
{
    die("Kan niet registreren je bent al ingelogd");
}

//Kernbegrip 17, stap 2b:
$password = $_POST['password'];
$passwordrepeat = $_POST['passwordrepeat'];
if( $password != $passwordrepeat)
{
    die("Wachtwoorden zijn niet gelijk!");
}
//Kernbegrip 17, stap 3a:
if(empty($_POST['password']))
{
    die("Wachtwoord mag niet leeg zijn!");
}
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
//Kernbegrip 17, stap 3b:
$query = "INSERT INTO users (naam, username, password) VALUES (:naam, :username, :hashed_password)";
$statement = $conn->prepare($query);
$statement->execute([
    ":naam" => $naam,
    ":username" => $username,
    ":hashed_password" => $hashed_password
]);
//Stuur naar login:
header("Location:../tasks/login.php");
exit;